<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Blog';
        $this->load->view('frontend/templates/Header',$data);
		$this->load->view('frontend/Single_blog');
        $this->load->view('frontend/templates/Footer');
	}
}
