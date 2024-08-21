<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Confirmation extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
		$this->load->model('Majesticmodels');
	}

	public function index($ordID)
	{
		$where = array('id' => $ordID);
		$data['Order'] = $this->Majesticmodels->get_where('orders' , $where)->result();
		if($data['Order'][0]->id_user == null)
		{
			$get_customer = array('id_customer' => $data['Order'][0]->id_customer);
			$get_order_id = array('order_id' => $ordID);
			$data['Customer'] = $this->Majesticmodels->get_where('customer' , $get_customer)->result();
			$data['Order_items'] = $this->Majesticmodels->get_where('order_items' , $get_order_id)->result();
			$data['Product'] = $this->Majesticmodels->get_data('product')->result();
		}
		else
		{
			$get_customer = array('id_customer' => $data['Order'][0]->id_customer);
			$get_order_id = array('order_id' => $ordID);
			$data['Customer'] = $this->Majesticmodels->get_where('customer',$get_customer)->result();
			$data['Order_items'] = $this->Majesticmodels->get_where('order_items' , $get_order_id)->result();
			$data['Product'] = $this->Majesticmodels->get_data('product')->result();
		}
		$data['title'] = 'Confirmation';
        $this->load->view('frontend/templates/Header',$data);
		$this->load->view('frontend/Confirmation',$data);
        $this->load->view('frontend/templates/Footer');
	}
}
