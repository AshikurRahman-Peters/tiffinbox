<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class att_report_model extends CI_Model {

	public function __construct()
	{
		$this->load->library('session');
	}
	public function getStudent(){ 
		//print_r($_POST);
		//die();
		$this->db->select('*');
		$this->db->from('studentinfo as info');
		$this->db->join('studentdetails as detail', 'detail.Id=info.StdDetailsId');
		$this->db->join('classes', 'classes.Id = info.StdClassId');
		// if($this->input->post('date')!='') {
		// 	// $this->db->join('attendance', 'info.StdDetailsId = attendance.rollNo and classes.Id= attendance.classId','LEFT');, 'attendance.date'=>$date
		// };
		($this->input->post('classId')!='') ? $this->db->where(array('info.StdClassId'=>$this->input->post('classId'))) : '';
		 $this->db->order_by('StdRollNo', 'asc'); 
		//$this->db->get();
		//echo $this->db->last_query();
		//exit;
		return  $this->db->get();
		$this->db->get('attendance');
		$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);
		$this->db->where($array); 
	}

	
}