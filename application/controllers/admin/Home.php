<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_company");
    }

    public function index()
    {
        $data['company']				= $this->model_company->get();

        $this->load->view('tamplate_dashboard/header', $data);
        $this->load->view('tamplate_dashboard/sidebar_admin', $data);
        $this->load->view('tamplate_dashboard/topbar', $data);
        $this->load->view('page_admin/view_home', $data);
        
    }
    
}


?>