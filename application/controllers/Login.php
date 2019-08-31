<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_company");
    }

    public function index()
    {
        $data['company']				= $this->model_company->get();

        $this->load->view("page_login/view_login", $data);   
    }
    
}


?>