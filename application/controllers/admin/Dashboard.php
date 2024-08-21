<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Majesticmodels');
		is_logged_in();
	}

	public function index()
	{
		$orderItems = $this->Majesticmodels->get_data('order_items')->result();

		$favoriteItems = array();
		foreach($orderItems as $oi) {
			$productId = $oi->product_id ;
			if(isset($favoriteItems[$productId])) 
			{
				$favoriteItems[$productId]['count']++;
			} 
			else 
			{
				$where = array('id_product' =>$productId);
				$product = $this->Majesticmodels->get_where('product',$where)->row();
				$favoriteItems[$productId] = array(
					'name' => $product->name,
					'count' => 1
				);
			}
		}
		arsort($favoriteItems);
		$data['favorite'] = array_slice($favoriteItems, 0, 5); ;
		$data['dailyTransactions'] = array_slice($this->Majesticmodels->getDailyTransactions(),0,7);
		$data['weeklyTransactions'] = array_slice($this->Majesticmodels->getWeeklyTransactions(),0,4);
        $data['monthlyTransactions'] = array_slice($this->Majesticmodels->getMonthlyTransactions(),0,12);
        $data['yearlyTransactions'] = $this->Majesticmodels->getYearlyTransactions();
		$this->load->view('backend/template/Header');
        $this->load->view('backend/template/Sidebar');
        $this->load->view('backend/Dashboard',$data);
        $this->load->view('backend/template/Footer');
	}
}