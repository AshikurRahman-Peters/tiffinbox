<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Website extends CI_Controller {
	
	public function __construct(){
		parent:: __construct();
		$this->load->helper('form');
		$this->load->library(array('session','pagination','form_validation')); 
		$this->load->model('website_model');
		$this->load->model('setting_model');
	}
	
	public function links(){
   
		$data['links'] = $this->db->get('link'); 
		$data['page_title'] = 'Links :: School Management System';
		$this->load->view('include/header',$data);
		$this->load->view('website/links');
		$this->load->view('include/footer');	
		
	}
	
	public function createlink(){
		$data['page_title'] = 'Create Links :: School Management System';
		$this->load->view('include/header',$data);
		$this->load->view('website/create_link');
		$this->load->view('include/footer');	 
	}
	
	public function insertlink(){
		$insert_data = $this->input->post();
		// validation check forinserting designation 
		$this->form_validation->set_rules('url', 'Link url', 'required');
		$this->form_validation->set_rules('name', 'Link name', 'required');
		 
		//check is form data valid of not
	 	if ($this->form_validation->run() == FALSE):
			$this->session->set_flashdata('status_wrong',validation_errors() );
			$this->createlink();
		else:
			//send insert_data to the model of database insert
			if($this->website_model->CreateNewLink($insert_data)):
				$this->session->set_flashdata('status_right', 'Successfully Add a New Expense!');
				redirect('website/links');
			else:
				$this->session->set_flashdata('status_wrong', 'Sorry system is unable to preserve this info!');
				redirect('website/links');
			endif;
		endif;	
		
	}
	
	public function updatelink($id){
		$data['link'] = $this->db->get_where('link', array('Id'=>$id));
		$data['page_title'] = 'Update Link :: School Management System';
		$this->load->view('include/header',$data);
		$this->load->view('website/update_link');
		$this->load->view('include/footer');
	}	
	public function editlink(){
		$update_data = $this->input->post();
		// validation check forinserting designation 
		$this->form_validation->set_rules('name', 'Link Name', 'required');
		$this->form_validation->set_rules('url', 'Link URL', 'required');
	 
	 	if ($this->form_validation->run() == FALSE):
			$this->session->set_flashdata('status_wrong',validation_errors() );
			$this->updatelink($update_data['id']);
		else:
			//send insert_data to the model of database insert
			if($this->website_model->updateLink($update_data)):
				$this->session->set_flashdata('status_right', 'Successfully Updated a Expense!');
				redirect('website/links');
			else:
				$this->session->set_flashdata('status_wrong', 'Sorry system is unable to update this info!');
				redirect('website/links');
			endif;
		endif;	
			
		}
	
	public function deletelink($id){
		if($this->db->delete('link', array('Id'=>$id))):
			$this->session->set_flashdata('status_right', 'Successfully Deleted a Link!');
			redirect('website/links');
	  else:
		  	$this->session->set_flashdata('status_wrong', 'Sorry system is unable to delete this info!');
			redirect('website/links');
	  endif;
		
	}
	
	public function emailconfig(){
		$data['emailcontact'] = $this->db->get('setting');
		$data['page_title'] = 'Email Config :: School Management System';
		$this->load->view('include/header',$data);
		$this->load->view('website/contact_email');
		$this->load->view('include/footer');
	} 
	
	public function editcontactemail(){
		$update_data = $this->input->post();
		// validation check forinserting designation 
		$this->form_validation->set_rules('email', 'Contact email', 'required');
	 
	 	if ($this->form_validation->run() == FALSE):
			$this->session->set_flashdata('status_wrong',validation_errors() );
			$this->emailconfig();
		else:
			$this->db->where('id',$update_data['Id']);
			if($this->db->update('contact_email',$update_data['contact_us_email'])):
				$this->session->set_flashdata('status_right', 'Successfully Updated Email Address!');
				redirect('website/emailconfig');
			else:
				$this->session->set_flashdata('status_wrong', 'Sorry system is unable to update this info!');
				redirect('website/emailconfig');
			endif;
		endif;	
	}
	public function aboutus(){
		$data['aboutus'] = $this->db->get('setting');
		$data['page_title'] = 'About Us :: School Management System';
		$this->load->view('include/header',$data);
		$this->load->view('website/about_us');
		$this->load->view('include/footer');
	} 
	public function editaboutus(){
		$update_data = $this->input->post();
//		var_dump($update_data);
//		exit;
		// validation check forinserting designation 
		$this->form_validation->set_rules('about_us', 'about us', 'required');
	 
	 	if ($this->form_validation->run() == FALSE):
			$this->session->set_flashdata('status_wrong',validation_errors() );
			$this->emailconfig();
		else:
			$this->db->where('id',$update_data['id']);
			if($this->db->update('setting', $update_data)):
				$this->session->set_flashdata('status_right', 'Successfully Updated!');
				redirect('website/aboutus');
			else:
				$this->session->set_flashdata('status_wrong', 'Sorry system is unable to update this info!');
				redirect('website/aboutus');
			endif;
		endif;	
	}
	public function principal(){

        $update_data = $this->input->post();
        if($update_data){
            $this->form_validation->set_rules('principal_word', 'Principal word', 'required');

            if ($this->form_validation->run() == FALSE):
                $this->session->set_flashdata('status_wrong',validation_errors() );
            else:

                if($this->setting_model->update($update_data)):
                    $this->session->set_flashdata('status_right', 'Successfully Updated!');
                else:
                    $this->session->set_flashdata('status_wrong', 'Sorry system is unable to update this info!');
                endif;
            endif;
            redirect('website/principal');
        }

		$data['principal'] = $this->db->get('setting');
		$data['page_title'] = 'Word From Principal:: School Management System';
		$this->load->view('include/header',$data);
		$this->load->view('website/principal');
		$this->load->view('include/footer');
	}

    public function slider(){
        $data['infos'] = $this->db->get('setting')->result();

        if(count($data['infos'])){
            $data['infos'] = $data['infos'][0];
        }else{
            $data['infos'] = new stdClass();
        }

        $data['page_title'] = 'Homepage Slider:: School Management System';
        $this->load->view('include/header',$data);
        $this->load->view('website/slider');
        $this->load->view('include/footer');
    }

    public function add_slider(){
        $data = $this->input->post();
        if($this->setting_model->add_slider($data)){
            $this->session->set_flashdata('status_right', 'Successtully Update information');
            redirect('website/slider');
        }else{
            $this->session->set_flashdata('status_wrong', 'Sorry system is unable to Remove this info!');
            redirect('setting/slider');
        }
    }

    public function remove_slide($id){
        if($this->setting_model->remove_slide($id)){
            $this->session->set_flashdata('status_right', 'Successtully Update information');
            redirect('website/slider');
        }else{
            $this->session->set_flashdata('status_wrong', 'Sorry system is unable to Remove this info!');
            redirect('setting/slider');
        }
    }
	public function social(){
		$data['social'] = $this->db->get('setting');
		$data['page_title'] = 'Social Links Config :: School Management System';
		$this->load->view('include/header',$data);
		$this->load->view('website/social');
		$this->load->view('include/footer');
	} 
	public function updatesociallink(){
		$update_data = $this->input->post();
		$id = $update_data['id'];
	 	unset($update_data['id']);
		$this->db->where('Id',$id);
		
		if($this->db->update('setting',$update_data)):
			$this->session->set_flashdata('status_right', 'Successfully Updated social Address!');
			redirect('website/social');
		else:
			$this->session->set_flashdata('status_wrong', 'Sorry system is unable to update this info!');
			redirect('website/social');
		endif;
		 
	}
}