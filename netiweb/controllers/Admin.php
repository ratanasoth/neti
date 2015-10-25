<?php

class Admin extends CI_Controller{
   public function __construct()
    {
        parent:: __construct();
        $this->load->model('usermodel');
              
    }
    public function index()
    {
        $data['title']="Net I - Administration";
        $this->load->view("master/header",$data);
    }
    public function login()
    {
        $data['title'] = "User Authentication";
        $this->load->view("template/header",$data);
        $this->load->view("master/login");
        $this->load->view("template/footer");
    }
    /**
     * Action to do login.
     * If login success, user's information will be stored in session.
     */
    public function doLogin()
    {
        $username = $this->input->post('username');
        $pass = $this->input->post('pass');
        $user = $this->usermodel->getUserByName($username);
        if (count($user)>0) {
            
        }
        else
        {
            redirect(base_url('admin/login'));
        }
    }
}
