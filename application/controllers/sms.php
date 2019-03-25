<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sms extends CI_Controller {
	
	public function __construct(){
		parent:: __construct();
		$this->load->model('sms_model');
	} 
	
	public function index(){
			$data['page_title'] = 'Students :: School management system';
			// $data['sms']= $this->sms_model->getAllStudent();
			$this->load->view('include/header',$data);
			$this->load->view('sms/index');
			$this->load->view('include/footer');	
	}

		public function getStudentByClassId(){
		$classId = $this->input->post('class_id');
		$this->db->select('studentdetails.Id,studentdetails.StdName, studentinfo.StdDetailsId,studentinfo.StdRollNo, classes.ClassName');
		$this->db->from('studentdetails');
		$this->db->join('studentinfo','studentinfo.StdDetailsId=studentdetails.Id');
		$this->db->join('classes','classes.Id=studentinfo.StdClassId');
		$this->db->where('studentinfo.StdClassId',$classId);
		$data['students'] = $this->db->get();
		$html = $this->load->view('sms/index',$data);;
		echo $html;
	}

		public function getClasses(){
		$classes = $this->db->get_where('classes', array('ClassStatus'=>1));
		$options[] = '---Select Class---';
		 foreach($classes->result() as $class){
		 	$options[$class->Id] = $class->ClassName;
		 }
		 echo '<label class="control-label" for="form-field-11">
			Class <span class="red">* </span>:
		</label><div class="controls" id="Classdiv">';
		 echo form_dropdown('classId', $options,'','id="classNamediv"');
		 echo '</div> ';								  
	}
		public function getEmployes(){
		$employee = $this->db->get_where('employee', array('employeeStatus'=>1));
		$options[] = '---Select emplyes---';
		foreach($employee->result() as $employee){
		$options[$employee->Id] = $employee->employeeName;
		 }
		 echo '<label class="control-label" for="form-field-11">
			Class <span class="red">* </span>:
		</label><div class="controls" id="Classdiv">';
		 echo form_dropdown('employeeId', $options,'','id="employeeNamediv"');
		 echo '</div> ';								  
	}
		public function getparents(){
		$students = $this->db->get_where('studentdetails', array('StdFatherName'=>1));
		$options[] = '---Select parents---';
		foreach($students->result() as $parents){
		$options[$parents->Id] = $parents->StdFatherName;
		 }
		 echo '<label class="control-label" for="form-field-11">
			Class <span class="red">* </span>:
		</label><div class="controls" id="Classdiv">';
		 echo form_dropdown('studentdetailsId', $options,'','id="classNamediv"');
		 echo '</div> ';								  
	}
	
	
	
}