<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Noticeboard_Model extends CI_Model {

	public function __construct()
	{
		$this->load->library('session');
	}

    public function getPublishedNotices($limit=0){
        if($limit){
            $this->db->limit($limit);
        }
        $this->db->where('noticeStatus', 1);
        $this->db->where("noticeCreatedDate >", strtotime('1 year ago'));
        $this->db->order_by("noticeCreatedDate", "desc");
        return $this->db->get('noticeboard')->result();
    }
	
	
	
	public function getAllNotice(){
		$this->db->limit(5);
		$this->db->order_by("noticeCreatedDate", "desc"); 	 
		return $query = $this->db->get('noticeboard');
		
	}
	
	public function CreateNewNoticeboard($data){
		$data['noticeDate'] = date('Y-m-d H:s:i',strtotime($data['noticeDate'].' '.@$data['timepicker1']));
		unset($data['timepicker1']); 
		unset($data['hour']); 
		unset($data['minute']); 
		unset($data['second']); 
		$session = $this->session->userdata('is_logged');
		$data['noticeCreatedBy'] = $session['id'];
		$data['noticeCreatedDate'] = date('Y-m-d H:s:i');
		$this->db->insert('noticeboard',$data);
		return $this->db->affected_rows();
	}
	
	public function getNoticeById($id){
		
		return $this->db->get_where('noticeboard',array('Id'=>$id));	
		
	}
	
	public function UpdateNoticeById($data){
		$id = $data['id'];
		$data['noticeDate'] = date('Y-m-d H:s:i',strtotime($data['noticeDate'].' '.@$data['timepicker1']));
		unset($data['timepicker1']); 
		unset($data['hour']); 
		unset($data['minute']); 
		unset($data['second']); 
		unset($data['id']); 
		$this->db->where('Id',$id);	
		$this->db->update('noticeboard',$data);
		return $this->db->affected_rows();
			
		
	}
}