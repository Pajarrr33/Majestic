<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Contact';
        $this->load->view('frontend/templates/Header',$data);
		$this->load->view('frontend/Contact');
        $this->load->view('frontend/templates/Footer');
	}
}
