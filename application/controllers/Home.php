<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model("model_company");
        $this->load->model("model_services");
        $this->load->model("model_portfolio");
        $this->load->model("model_testimony");
    }

	public function index()
	{
        $data['page']				    = "Home";
        $data['company']				= $this->model_company->get();
        $data['services']				= $this->model_services->get_active();
        $data['portfolio']				= $this->model_portfolio->get_active();
        $data['testimony']				= $this->model_testimony->get_active();

		$this->load->view('page_home/header', $data);
		$this->load->view('page_home/view_home', $data);
		$this->load->view('page_home/footer', $data);
	}
}

?>