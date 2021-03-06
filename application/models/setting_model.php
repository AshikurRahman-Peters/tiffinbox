<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Setting_Model extends CI_Model {

    public $table = 'setting';

	public function __construct()
	{
		$this->load->library('session');
	}
	
	function insert($data){
		$insert_data = array(
			'institute_name'	=>$data['institute_name'], 
			'address'			=>$data['address'], 
			'contact_no'		=>$data['contact_no'], 
			'email'				=>$data['email'],
		);
		if(@$_FILES['institute_logo']['name']){
			var_dump($_FILES['institute_logo']);
			$insert_data['institute_logo'] = $this->uploadinputfile($data);
		}
	 
		$this->db->where('Id', $data['id']); 
		if($this->db->update('setting',$insert_data)):
			return TRUE;
		else:
			return FALSE;
		endif;	
	}

    function add_slider($data){

        $query = $this->db->get($this->table, 1);
        if($query->num_rows() > 0){
            $row = $query->result()[0];
            if($row->sliders){
                $sliders = unserialize($row->sliders);
                array_push($sliders, [
                    'image'=> site_url().'/media/slider/'.$this->upload_image($data, 'image', 'title', 'slider', './media/slider'),
                    'title'=>$data['title'],
                    'content'=>$data['content']
                ]);
            }else{
                $sliders = [[
                    'image'=> site_url().'/media/slider/'.$this->upload_image($data, 'image', 'title', 'slider', './media/slider'),
                    'title'=>$data['title'],
                    'content'=>$data['content']
                ]];
            }
            $insert_data = [
                'sliders'=>serialize($sliders)
            ];

            $this->db->where('id', $row->Id);
            if($this->db->update('setting',$insert_data)){
                return true;
            }else{
                return false;
            }
        }else{
            $sliders = [[
                'image'=> site_url().'media/slider/'.$this->upload_image($data, 'image', 'slider', './media/slider'),
                'title'=>$data['title'],
                'content'=>$data['content']
            ]];
            $insert_data = [
                'sliders'=>serialize($sliders)
            ];
            if($this->db->insert('setting',$insert_data)){
                return true;
            }else{
                return false;
            }
        }
    }

    public function update($insert_data){
        $query = $this->db->get($this->table, 1);
        if($query->num_rows() > 0){
            $row = $query->result()[0];

            $this->db->where('id', $row->Id);
            if($this->db->update('setting',$insert_data)){
                return true;
            }else{
                return false;
            }
        }else{
            if($this->db->insert('setting',$insert_data)){
                return true;
            }else{
                return false;
            }
        }
    }

    public function remove_slide($id){
        $query = $this->db->get($this->table, 1);
        if($query->num_rows() > 0){
            $row = $query->result()[0];
            if($row->sliders){
                $sliders = unserialize($row->sliders);
                $slide = $sliders[$id];
                $image = str_replace(site_url(), '', $slide['image']) ;

                file_exists('.'.$image) && unlink('.'.$image);

                array_splice($sliders, $id, 1);

                $insert_data = [
                    'sliders'=>serialize($sliders)
                ];

                $this->db->where('id', $row->Id);
                if($this->db->update('setting',$insert_data)){
                    return true;
                }else{
                    return false;
                }
            }
        }
        return true;
    }

	#file updload
	public function uploadinputfile($data){
		$new_file_name=NULL; 
		//start file upload and resize process 
		$config['upload_path'] 		= './media/schools';
		if(!is_dir($config['upload_path'])):
			mkdir($config['upload_path']);
		endif;
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg|bmp';
		//load ci upload library:
		$this->load->library('upload', $config);
		//check for upload:
		$this->upload->do_upload('institute_logo');
		// Resize the Image 2:
		$file_data = $this->upload->data(); // get the file upload data
        $new_file_name = 'school_'.$data['institute_name'].mb_strtolower($file_data['file_ext']);
        $photo_name =  'school_'.$data['institute_name'].mb_strtolower($file_data['file_ext']);
		 
		$filenew = rename($config['upload_path']
					.'/'.$file_data['file_name'], $config['upload_path'].'/'.$new_file_name);  
		$resize_me['image_library'] = 'gd2';
		$resize_me['source_image'] = $config['upload_path'].'/'.$new_file_name;
		$resize_me['create_thumb'] = TRUE;
		$resize_me['maintain_ratio'] = TRUE;
		$resize_me['master_dim'] = 'auto';
		$resize_me['width'] = 100;
		$resize_me['height'] = 100;
 	
 		//load the library:
		$this->load->library('image_lib', $resize_me); 
		$this->image_lib->resize(); 
		return $photo_name;
		 
	}

    #file updload
    public function upload_image($data, $attr, $rmAttr, $prefix, $path='./media/schools', $width=1024, $height=700){
        $new_file_name=NULL;
        //start file upload and resize process
        $config['upload_path'] 		= $path;
        if(!is_dir($config['upload_path'])):
            mkdir($config['upload_path']);
        endif;
        $config['allowed_types'] 	= 'gif|jpg|png|jpeg|bmp';
        //load ci upload library:
        $this->load->library('upload', $config);
        //check for upload:
        $this->upload->do_upload($attr);
        // Resize the Image 2:
        $file_data = $this->upload->data(); // get the file upload data

        $new_file_name = $prefix.'_'.$data[$rmAttr].mb_strtolower($file_data['file_ext']);
        $photo_name =  $prefix.'_'.$data[$rmAttr].mb_strtolower($file_data['file_ext']);

        $filenew = rename($config['upload_path']
            .'/'.$file_data['file_name'], $config['upload_path'].'/'.$new_file_name);
        $resize_me['image_library'] = 'gd2';
        $resize_me['source_image'] = $config['upload_path'].'/'.$new_file_name;
        $resize_me['create_thumb'] = false;
        $resize_me['maintain_ratio'] = TRUE;
        $resize_me['master_dim'] = 'auto';
        $resize_me['width'] = $width;
        $resize_me['height'] = $height;

        //load the library:
        $this->load->library('image_lib', $resize_me);
        $this->image_lib->resize();
        return $photo_name;

    }
}