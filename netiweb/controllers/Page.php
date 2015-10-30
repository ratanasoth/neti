<?php


/**
 * This controller will contain all actions related to page requests.
 *
 * @author Vongkol
 * @email hengvongkol@gmail.com
 */
class Page extends CI_Controller{
    //invoke parent's constructor
    public function __construct() {
        parent::__construct();
        $this->load->model('pagemodel');
    }
    /**
     * Default action will list all created pages.
     */
    public function index()
    {
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $data['title'] = "Page List";
        $data['pages'] = $this->pagemodel->getPages();
        $this->load->view('master/header', $data);
        $this->load->view('master/page-list');
        $this->load->view('master/footer');
                
    }
    /**
     * Function to show new page form
     */
    public function newPage()
    {
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $data['title'] = "New Page";
        $data['sms'] ="";
        $this->load->view('master/header', $data);
        $this->load->view('master/page-add');
        $this->load->view('master/footer');
    }
    /**
     * Add new page to database.
     */
    public function add()
    {
        if($this->session->userid==false)
        {
            redirect('admin/login');
        }
        $this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[3]|max_length[255]');
        if ($this->form_validation->run()==FALSE) {
            redirect(base_url('page/newpage'));
        }
        else{
            $result = $this->pagemodel->addPage();
            $data['title'] = "New Page";
            $data['sms'] = $result;
            $this->load->view('master/header', $data);
            $this->load->view('master/page-add');
            $this->load->view('master/footer');
        }
    }
    /**
     * View all pages here...
     */
    public function view()
    {
        
    }
}
