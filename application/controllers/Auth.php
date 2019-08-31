<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model("model_company");
        $this->load->model("model_services");
    }

	public function index()
	{
        $data['company']				= $this->model_company->get();
        $data['services']				= $this->model_services->getActive();

		$this->load->view('page_home/view_home', $data);
	}
}

?>