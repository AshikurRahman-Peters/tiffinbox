<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Syllabus extends CI_Controller {
	
	public function __construct(){
		parent:: __construct();
		$this->load->model(array('classes_model'));
		if(!$this->session->userdata('is_logged')){
			redirect('welcome');
		}
	}
	
	public function index(){
		$data['page_title'] = 'Classes::TiifinBox';
		$data['syllabus']=$this->classes_model->getAllClasses();
		$data['teacher'] = $this->db->get('employee')->result();
		$this->load->view('include/header',$data);
		$this->load->view('syllabus/index');
		$this->load->view('include/footer'); 
		
	}
	public function create(){
		$data['page_title'] = 'Add Class::TiifinBox';
		$data['teacher'] = $this->db->get('employee')->result();
		$this->load->view('include/header',$data);
		$this->load->view('syllabus/create');
		$this->load->view('include/footer');
		
	}
	
	public function insert(){
		 
		$this->form_validation->set_rules('ClassName', 'Class Name', 'trim|required|xss_clean');
		//check is form data valid of not
	 	if ($this->form_validation->run() == FALSE):
			$this->session->set_flashdata('status_wrong',validation_errors() );
			$this->create(); 
			 
		else:
			if($this->classes_model->CreateNewClass($this->input->post())):
				$this->session->set_flashdata('status_right', 'Registration Complete! wait for approval!');
					$this->index();
					//redirect('classes/index');
				else:
				  $this->session->set_flashdata('status_wrong', 'Sorry system is unable to preserve this info!');
					$this->create();
					//redirect('classes/create'); 
			endif;
		endif;
	}
	
	public function update($id){
			
		$data['page_title'] = 'Update Class :: TiffinBox';
		$data['class']	= $this->classes_model->getClassById($id);
		$this->load->view('include/header',$data);
		$this->load->view('syllabus/update');
		$this->load->view('include/footer');
	}
	
	public function edit(){
				
		$this->form_validation->set_rules('ClassName', 'Class Name', 'trim|required|xss_clean');

		
		//check is form data valid of not
	 	if ($this->form_validation->run() == FALSE):
	 		 
			$this->session->set_flashdata('status_wrong',validation_errors() );
			redirect('syllabus/update/'.$this->input->post('id')); 
			 
		else:
			if($this->classes_model->UpdateClassById($this->input->post())):
				$this->session->set_flashdata('status_right', 'Successtully Update Class information');
					redirect('syllabus/index');
				else:
			 
					redirect('syllabus/index'); 
			endif;
		endif;	
		
	}
	
	public function delete($id){
				
		$this->db->delete('syllabus',array('Id'=>$id));
		$this->db->delete('subjects',array('SubjectClassId'=>$id));
		$this->db->delete('sections',array('ClassId'=>$id));
		
		if($this->db->affected_rows()):
					$this->session->set_flashdata('status_right', 'Successfully Removed the Class information!');
					redirect('syllabus/index');
				else:
				  	$this->session->set_flashdata('status_wrong', 'Sorry system is unable to Remove this info!');
					redirect('syllabus/index'); 
			endif;
		
	}
	
	public function addsubject(){
		$data['page_title'] = 'Add Subjects to the Classes :: TiffinBox';
		$this->load->view('include/header',$data);
		$this->load->view('syllabus/addsubject');
		$this->load->view('include/footer');
		
	}
	
	public function insertsubjects(){
			
		
	}
}	 