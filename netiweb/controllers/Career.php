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
        
    }
    // default action
    public function index()
    {
         if ($this->session->userid==false) {
            redirect(base_url('admin/login'));
        }
        // load some views
        $data['title']="Career Page";
        $this->load->view('master/header',$data);
        $this->load->view('master/career-list');
        $this->load->view('master/footer');
    }
}
