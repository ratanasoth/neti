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
        $this->load->model('MenuModel');
    }
    // default action
    public function index()
    {
        $data['title'] = "Contact Us";
        $data['menus'] = $this->MenuModel->getMainMenu();
        $data['subs'] = $this->MenuModel->getSubMenu();
        $data['MyClass'] =  $this;
        $this->load->view('template/header',$data);
        $this->load->view('home/contact-us',$data);
        $this->load->view('template/footer',$data);
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
