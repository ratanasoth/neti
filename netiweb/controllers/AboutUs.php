<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AboutUs
 *
 * @author Vongkol
 */
class AboutUs extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = "About Us";
        $this->load->view('template/header', $data);
        $this->load->view('home/about-us');
        $this->load->view('template/footer');
    }
}
