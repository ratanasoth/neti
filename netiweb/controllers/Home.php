<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('PartnerModel');
        $this->load->model('MenuModel');
        $this->load->model('SlideshowModel');
        $this->load->model('ServiceModel');
        $this->load->model('NewsModel');
       
    }
	/**
	This action method is the default action for the Home controller.
	This method will load Home page view.
	
	*/
	function index()
	{
            // pass title to the page
            $data['title'] = "Welcome to Net I Solution Co., Ltd";
            $data['partners'] = $this->PartnerModel->getPartners();
            $data['menus'] = $this->MenuModel->getMainMenu();
            $data['subs'] = $this->MenuModel->getSubMenu();
            $data['MyClass'] =  $this;
            $data['slides'] = $this->SlideshowModel->getSlide();
            $data['welcome'] = $this->SlideshowModel->getWelcome();
            $data['services'] = $this->ServiceModel->getService();
            $data['news'] = $this->NewsModel->getNews();
            $this->load->view("template/header",$data);
            $this->load->view("home/home",$data);
            $this->load->view("template/footer");
	}
        public function isContainSub($pid)
        {
            $count = $this->MenuModel->countSub($pid);
            $state=false;
            if($count>0){
                $state='yes';
            }
            else{
                $state='no';
            }
            return $state;
        }
}