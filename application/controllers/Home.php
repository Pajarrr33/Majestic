<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Majesticmodels');
	}
	public function index()
	{
		$data['Product'] = $this->Majesticmodels->get_data('product')->result();
		$this->load->view('Home',$data);
	}
}
