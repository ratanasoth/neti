<?php

/**
 * Description of ContactUs
 *
 * @author Vongkol
 */
class ContactUs extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    // default action
    public function index()
    {
        $data['title'] = "Contact Us";
        $this->load->view('template/header',$data);
        $this->load->view('home/contact-us',$data);
        $this->load->view('template/footer',$data);
    }
}
