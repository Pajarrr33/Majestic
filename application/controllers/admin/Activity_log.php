<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity_log extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Majesticmodels');
		is_logged_in();
	}

	public function index()
	{
        $data['Activity'] = $this->Majesticmodels->get_data('activity_log')->result();
		$this->load->view('backend/template/Header');
        $this->load->view('backend/template/Sidebar');
        $this->load->view('backend/Activity_log',$data);
        $this->load->view('backend/template/Footer');
	}
}