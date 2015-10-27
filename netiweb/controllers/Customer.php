<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Customer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('customermodel');
    }

    //Default function
    public function index() {

        if ($this->session->userid == false) {
            redirect(base_url('admin/login'));
        }
        $data['title'] = "Customer List";
        $data['list_customer'] = $this->customermodel->get_customer();
        $this->load->view('master/header', $data);
        $this->load->view('master/customer_list', $data);
        $this->load->view('master/footer');
    }
    public function customerList()
    {
        $data['title'] = "Our Customer";
        $data['customers'] = $this->customermodel->getCustomers();
        $this->load->view('template/header', $data);
        $this->load->view('home/customer-list', $data);
        $this->load->view('template/footer');
    }
    public function newcustomer(){
          if ($this->session->userid == false) {
            redirect(base_url('admin/login'));
        }
        $data['title'] = "Add New Customer";
        $data["sms"] = "";
        $this->load->view('master/header', $data);
        $this->load->view('master/customer_add',$data);
        $this->load->view('master/footer');
    }
    public function do_new_customer(){
         $data['title'] = "Add New Customer";
        $data["sms"] =""; 
        // set the filter image types
        $config['upload_path'] = 'assets/images/customer/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library("upload", $config);
        $customer_name =  $this->input->post("customername");
        $check = $this->customermodel->check_customer($customer_name);
        if($check){
            $data["sms"] ="<span class='text-danger'>This customer has already.</span>";
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
            
            $data_insert = array(
                "customername" => $this->input->post("customername"),
                "partimg" => $part,
                "img" => $file_name,
                "url" => $this->input->post("customerurl")
            );

           $insert =  $this->customermodel->add_new_customer($data_insert);
           if($insert){
               $data["sms"] = "<span class='text-info'>Data has been saved.</span>";
           }else{
               $data["sms"] = "<span class='text-danger'>Cannot add new customer. Please check your data again</span>";
           }
        }
        $this->load->view('master/header', $data);
        $this->load->view('master/customer_add',$data);
        $this->load->view('master/footer');
    }
    /*
     * This function is for delete customer
     * Author: Theary RIN
     */
    public function delete_customer($customer_id){
        
        $get_customer = $this->customermodel->delete_customer($customer_id);
        redirect("customer");
    }
}