<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Majesticmodels');
		$this->load->library('cart');
	}

	public function index()
	{
		$data['cart'] = $this->cart->contents(true);
		$data['title'] = 'Cart';
        $this->load->view('frontend/templates/Header',$data);
		$this->load->view('frontend/Cart',$data);
        $this->load->view('frontend/templates/Footer');
	}

	public function add_to_cart($id_product)
	{
		$where = array('id_product' => $id_product) ;
		$product = $this->Majesticmodels->get_where('product',$where)->row_array();
		if($product['promo'] != null){
			$data = array(
				'id' => $product['id_product'],
				'qty' => 1,
				'price' => $product['promo'],
				'name' => $product['name'],
				'img' => $product['img'],
				'total' => 1 * $product['promo'],
				'weight' => $product['weight']
			);
		}else{
			$data = array(
				'id' => $product['id_product'],
				'qty' => 1,
				'price' => $product['price'],
				'name' => $product['name'],
				'img' => $product['img'],
				'total' => 1 * $product['price'],
				'weight' => $product['weight']
			);
		}
		$this->cart->insert($data);
		redirect('Cart');
	}

	public function updateItemQty()
	{
		$rowid = $this->input->get('rowid');
		$qty = $this->input->get('qty');
		$upgrade = $this->cart->get_item($rowid);
		$where = array('id_product' => $upgrade['id']) ;
		$product = $this->Majesticmodels->get_where('product',$where)->row_array();
		if(!empty($rowid) && !empty($qty))
		{
			$data = array(
				'rowid' => $rowid,
				'qty' => $qty,
				'total' => $qty * $upgrade['price'],
				'weight' => $qty * $product['weight']
			);
			$update = $this->cart->update($data);
		}

		echo $update? 'ok':'err ';
	}

	public function delete_item($rowid)
	{
		$this->cart->remove($rowid);
		redirect('Cart');
	}
}
