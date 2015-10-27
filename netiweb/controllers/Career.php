<?php

/*
 * The Career controll will contain all action functions that are used for managing
 * career page.
 * @Author: 
 * @Email: 
 * @Phone: 
 */

class Career extends CI_Controller{
   
    // invoke parent's constructor
    public function __construct() {
        parent::__construct();
        $this->load->model("careermodel");
        
    }
    //list available careers
    public function openJob()
    {
        $data['title'] = "Careers";
        $this->load->view('template/header', $data);
        $this->load->view('home/career');
        $this->load->view('template/footer');
    }
    // default action
    public function index()
    {
         if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        // load some views
        $data['title']="Career Page";
        $data["career"] = $this->careermodel->get_career();
        $this->load->view('master/header',$data);
        $this->load->view('master/career-list',$data);
        $this->load->view('master/footer');
    }
    
    //Function edit career page
    public function edit_career($id=null){
        
         if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        // load some views
        $data['title']="Edit Career Page";
        $data["edit_career"] = $this->careermodel->get_career($id);
        $this->load->view('master/header',$data);
        $this->load->view('master/career-edit',$data);
        $this->load->view('master/footer');
    }
    
    //Function for do editting career
    public function do_edit($career_id=null){
        
        $title = $this->input->post("title");
        $des = $this->input->post("description");

        $result = $this->careermodel->do_edit_career($title, $des, $career_id);
        if ($result) {
            redirect("career");
        } else {
            redirect("career/edit_career/" . $career_id);
        }
    }
}
