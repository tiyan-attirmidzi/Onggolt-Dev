<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model("model_company");
        $this->load->model("model_services");
        $this->load->model("model_portfolio");
    }

	public function index()
	{
        $data['page']				    = "Portfolio";
        $data['company']				= $this->model_company->get();
        $data['services']				= $this->model_services->get_active();
        $data['portfolio']				= $this->model_portfolio->get_active();
        $data['filter']				    = $this->model_portfolio->get_filter();

		$this->load->view('page_home/header', $data);
		$this->load->view('page_home/view_portfolio', $data);
		$this->load->view('page_home/footer', $data);
    }
    
	public function detail()
	{
        $data['page']				    = "Portfolio";
        $data['company']				= $this->model_company->get();
        $data['detail']				    = $this->model_portfolio->get_active_detail($this->uri->segment(2));
        
        $this->load->view('page_home/header', $data);
        if ($data['detail']) {$this->load->view('page_home/view_portfolio_detail', $data);}
        else {$this->load->view('page_error/portfolio', $data);}
        $this->load->view('page_home/footer', $data);
	}
}

?>