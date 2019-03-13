<?php
/**
 * Created by PhpStorm.
 * User: najmul
 * Date: 1/10/16
 * Time: 1:49 AM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

    public function __construct(){
        parent:: __construct();
    }

    public function index(){
        $this->load->model('noticeboard_model');
        $this->load->model('link_model');
        $data['notices']=$this->noticeboard_model->getPublishedNotices(5);
        $data['links']=$this->link_model->getAll();
        $data['page_title'] = 'welcome :: tiffinbox';

        $this->render('site/index', $data);
    }

    public function currentStudents(){
        $this->load->model('students_model', 'student');
        $data['students']=$this->student->getCurrentStudents();
        $this->render('site/current-students', $data);
    }

    public function exStudents(){
        $this->load->model('students_model', 'student');
        $data['students']=$this->student->getExStudents();
        $this->render('site/ex-students', $data);
    }

    public function teachers(){
        $this->load->model('employee_model', 'employee');
        $data['teachers']=$this->employee->getTeachers();
        $this->render('site/teachers', $data);
    }

    public function committeeMembers(){
        $this->load->model('employee_model', 'employee');
        $data['teachers']=$this->employee->getCommitteeMembers();
        $this->render('site/committee-members', $data);
    }

    public function staffs(){
        $this->load->model('employee_model', 'employee');
        $data['teachers']=$this->employee->getStaffs();
        $this->render('site/staffs', $data);
    }

    public function notices(){
        $this->load->model('noticeboard_model', 'notice');

        $data['notices']=$this->notice->getPublishedNotices();
        $this->render('site/notices', $data);
    }

    public function aboutUs(){
        $data['committee_members'] = [
            [
                'image'=>'ci_1.jpg',
                'name'=>'Ashikur Rahman',
                'designation'=>'President'
            ],
            [
                'image'=>'ci_1.jpg',
                'name'=>'Mahmudul Hassan',
                'designation'=>'Vice President'
            ],
            [
                'image'=>'ci_1.jpg',
                'name'=>'Masum',
                'designation'=>'Adviser'
            ],
            [
                'image'=>'ci_1.jpg',
                'name'=>'Masum',
                'designation'=>'Adviser'
            ]
        ];
        $this->render('site/about-us', $data);
    }

    public function contact(){

        if($data = $this->input->post()){
            $this->session->set_flashdata('messages', [
                ['success'=> 'We will contact you soon.']
            ]);
            redirect('site/contact');
        }
        $this->render('site/contact');
    }

    private function render($view, $data = []){
    	
        $data['infos']=$this->db->get('setting')->result();
//        var_dump(unserialize($data['infos'][0]->sliders));die();
		if(!$data['infos'][0]->sliders || !count(unserialize($data['infos'][0]->sliders))){
			$data['infos'][0]->sliders = [
				['image'=>site_url().'media/slider/demo01.jpg', 'title'=>'', 'content'=>''],
				['image'=>site_url().'media/slider/demo02.jpg', 'title'=>'', 'content'=>''],
				['image'=>site_url().'media/slider/demo03.jpg', 'title'=>'', 'content'=>'']
			] ;
			$data['infos'][0]->sliders = serialize($data['infos'][0]->sliders);
		}
        $this->load->view('include/site-header',$data);
        $this->load->view($view);
        $this->load->view('include/site-footer');
    }
}