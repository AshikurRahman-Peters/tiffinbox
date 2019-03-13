<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Classes_Model extends CI_Model {

	public function __construct()
	{
		$this->load->library('session');
	}
	
	
	
	public function getAllClasses(){
	 	$this->db->order_by('ClassNumaricName', 'asc');
		return $query = $this->db->get('classes');
		
	}
	public function CreateNewClass($data){
		//gets subjects of this class:
		$subject = $data['subjects'];
		 
		if($data['haveAnySection']){
			$sectionName = $data['SectionName'];
			$data['is_section']=1;
		}
		unset($data['subjects']);
		unset($data['haveAnySection']);
		unset($data['SectionName']);
		 
		$this->db->insert('classes',$data);
		$class_id = $this->db->insert_id();
		
		//insert subject to the subject table:
		foreach(explode(',',$subject) as $sub):
		$insert_data = array(
			'SubjectName' => trim($sub),
			'SubjectClassId'=>$class_id,
			'SubjectStatus'=>1
		);
		$this->db->insert('subjects',$insert_data);
		endforeach;
		
		//insert section to the sections table:
		foreach(explode(',',$sectionName) as $ses):
		$insert_data1 = array(
			'SectionName' => trim($ses),
			'ClassId'=>$class_id,
			'SectionStatus'=>1
		);
		$this->db->insert('sections',$insert_data1);
		endforeach;
		return true;
		
	}
	
	public function getClassById($id){
		
		return $this->db->get_where('classes',array('id'=>$id));	
		
	}
	
	public function UpdateClassById($data){
			
		$id = $data['id'];
		unset($data['id']);
		
		//get new subjects:
		$subject = $data['subjects'];
		
		
		$class_id = $id;
		$this->db->where('SubjectClassId',$class_id);
		$this->db->delete('subjects');
	 
		//insert again subject to the subject table:
		foreach(explode(',',$subject) as $sub):
			 
			$update_data = array(
				'SubjectName' => trim($sub),
				'SubjectClassId'=>$class_id,
				'SubjectStatus'=>1
			);
			if($sub!=""){
				$this->db->insert('subjects',$update_data);
			}
			
		endforeach;
		
		//get new sections:
		$section = $data['SectionName'];
		
		$this->db->where('ClassId',$class_id);
		$this->db->delete('sections');
		
		//insert again subject to the subject table:
		foreach(explode(',',$section) as $sec):
			
			$update_data = array(
				'SectionName' => trim($sec),
				'ClassId'=>$class_id,
				'SectionStatus'=>1
			);
		 if($sec!=""){
			$this->db->insert('sections',$update_data);
		 }
		endforeach;
		
		unset($data['subjects']);
		unset($data['SectionName']);
		
		$this->db->where('Id',$id);	
		$this->db->update('classes',$data);
		
		return true;
			
		
	}
}