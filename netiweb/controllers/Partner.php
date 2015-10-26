<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Partner extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('partnermodel');
    }

    //Default function
    public function index() {

        if ($this->session->userid == false) {
            redirect(base_url('admin/login'));
        }
        $data['title'] = "Partner List";
        $data['list_partner'] = $this->partnermodel->get_partner();
        $this->load->view('master/header', $data);
        $this->load->view('master/partner_list', $data);
        $this->load->view('master/footer');
    }

    /*
     * This function is for add new partner
     * Author: Theary RIN
     */

    public function newpartner() {

        if ($this->session->userid == false) {
            redirect(base_url('admin/login'));
        }
        $data['title'] = "Add New Partner";
        $data["sms"] = "";
        $this->load->view('master/header', $data);
        $this->load->view('master/partner_add',$data);
        $this->load->view('master/footer');
        
    }

    /*
     * This function is for add new partner
     * Author: Theary RIN
     */

    public function do_new_partner() {
        
        $data['title'] = "Add New Partner";
        $data["sms"] =""; 
        // set the filter image types
        $config['upload_path'] = 'assets/images/partner/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library("upload", $config);
        $partner_name =  $this->input->post("partnername");
        $check = $this->partnermodel->check_partner($partner_name);
        if($check){
            $data["sms"] ="<span class='text-danger'>This partner has already.</span>";
        }else{
            if ($this->upload->do_upload("image")) {
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
                $part = $config['upload_path'];
            } else {
                $error = array('error' => $this->upload->display_errors());
                $file_name = "";
                $part = "";
            }
            
            $data = array(
                "partnername" => $this->input->post("partnername"),
                "partimg" => $part,
                "img" => $file_name,
                "url" => $this->input->post("partnerurl")
            );

           $insert =  $this->partnermodel->add_new_partner($data);
           if($insert){
               $data["sms"] = "<span class='text-info'>Data has been saved.</span>";
           }else{
               $data["sms"] = "<span class='text-danger'>Cannot add new partner. Please check your data again</span>";
           }
        }
        $this->load->view('master/header', $data);
        $this->load->view('master/partner_add',$data);
        $this->load->view('master/footer');
    }
    /*
     * This function is for deleting data partner
     * Author: Theary RIN
     */
    public function delete_partner($partner_id){
        
        $get_partner = $this->partnermodel->delete_partner($partner_id);
        redirect("partner");
    }

}
