<?php

/**
 * Description of User
 *
 * @author Vongkol
 */
class User extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('usermodel');
    }
    /**
     * The default function to get all users from table users.
     */
    public function index(){
        $data['title'] = "User List";
        $data['users'] = $this->usermodel->getUsers();
        $this->load->view('master/header', $data);
        $this->load->view('master/user-list', $data);
        $this->load->view('master/footer');
    }
    /**
     * A function to delete a user by its id.
     */
    public function delete()
    {
        $id = $this->uri->segment(3);
        $this->usermodel->deleteUser($id);
        redirect(base_url('user'));
    }
    /**
     * A function to show add new user form
     */
    public function newUser()
    {
        $data['title'] = "Add New User";
        $this->load->view('master/header', $data);
        $this->load->view('master/user-add');
        $this->load->view('master/footer');
    }
}
