<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

	/**
	This action method is the default action for the Home controller.
	This method will load Home page view.
	
	*/
	function index()
	{
            // pass title to the page
            $data['title'] = "Welcome to Net I Solution Co., Ltd";
            $this->load->view("template/header",$data);
            $this->load->view("home/home");
            $this->load->view("template/footer");
	}
}