<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class att_report extends CI_Controller {
	
	public function __construct(){
		parent:: __construct();
		$this->load->model('att_report_model');

	} 
	
	public function index(){
			$data['page_title'] = 'Students Attendance:: School management system';
			$data['student']= $this->att_report_model->getStudent();
			$this->load->view('include/header',$data);
			$this->load->view('att_report/index');
			$this->load->view('include/footer');
  }
  	
 
	// public function get_content(){
 //        $this->db->select('Attendance(MONTH(att_date)),'-',(YEAR(att_date))');
 //        $this->db->from('Attendance');
 //        $this->db->where('att_date', "Active");
 //        $query = $this->db->get();
 //        return $query->result();
 //    }
 //    public function get_last_month(){
 //        $this->db->select('*');
 //        $this->db->from('Attendance');
 //        $this->db->where('YEAR(att_date)=');
 //        $query = $this->db->get();
 //        return $query->result();
 //    }
 
   // public function show_date{

   //  	$this->db->select('att_date');
   //  	$student = $this->db->get('Attendance')
   //  	$data = array();
   //  	$data['records'] = $student->result_array();
   //  	$this->load->view('att_report/index',$data)
   //  }
}