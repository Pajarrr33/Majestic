<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
		$this->load->library('cart');
		$this->load->model('Majesticmodels');
		$this->controller = 'Checkout';
		$params = array('server_key' => '', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
	}


	public function index()
	{
		if($this->cart->total_items() <= 0)
		{
			redirect('Product');
		}

		
		
		$cur = curl_init();

		curl_setopt_array($cur, array(
		CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"key: "
		),
		));

		$responses = curl_exec($cur);
		$error = curl_error($cur);

		curl_close($cur);

		if ($error) {
		$data['province'] = array('error' =>true);
		} else {
		$data['province'] = json_decode($responses);
		}


		$custData = array();
		$sumbit = $this->input->post('placeorder');
		if(isset($sumbit))
		{
			$this->_rules();

			$custData = array(
				'name' => strip_tags($this->input->post('name')),
				'email' => strip_tags($this->input->post('email')),
				'phone' => strip_tags($this->input->post('number')),
				'address' => strip_tags( 
							$this->input->post('input_province') . ", " . 
							$this->input->post('input_distrik') . ", " .
							$this->input->post('street') 
										),
			);

			if($this->form_validation->run() == true)
			{
				$shipping = $this->input->post('shipping');
				$courier = strip_tags($this->input->post('input_courier'));
				$insert = $this->Majesticmodels->insert_cust_data('customer' , $custData);
				if($insert)
				{
					$order = $this->placeorder($insert,$shipping,$courier);

					if($order)
					{
						$this->session->set_userdata('succes_msg', 'Order Placed succesfully.');
						redirect('Checkout/orderSucces/' . $order);
					}
					else
					{
						$data['error_msg'] = 'Order Submission Failed Please Try Again';
					}
				}
				else
				{
					$data['error_msg'] = 'Some Problems Occured,Please Try Again';
				}
			}
		}
		$data['custData'] = $custData;
		$data['cartItems'] = $this->cart->contents(true);
		$data['title'] = 'Chechkout';
		$data['User'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) ->row_array();
        $where = array('id_user' => $data['User']['id']);
        $data['Adress'] = $this->Majesticmodels->get_where('user_address', $where)->result();
        $this->load->view('frontend/templates/Header',$data);
		$this->load->view('frontend/Chechkout',$data);
        $this->load->view('frontend/templates/Footer');
	}

	public function placeorder($custID,$shipping,$courier)
	{
		if(!$this->session->userdata('email'))
		{
			$ordData = array(
				'id' => 1,
				'courier' => $courier,
				'id_customer' => $custID,
				'sub_total' => $this->cart->total(),
				'shipping' => $shipping,
				'total' => $this->cart->total() + (int)$shipping
			);
		}
		else 
		{
			$data['User'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) ->row_array();
			$ordData = array(
				'id' => 1,
				'id_user' => $data['User']['id'],
				'courier' => $courier,
				'id_customer' => $custID,
				'sub_total' => $this->cart->total(),
				'shipping' => $shipping,
				'total' => $this->cart->total() + (int)$shipping
			);
		}
		$insertOrder = $this->Majesticmodels-> insert_cust_data('orders',$ordData);
		var_dump($insertOrder);
		if($insertOrder) 
		{
			$cartItems = $this->cart->contents();
			$ordItemData = array();
			$i=0;
			foreach($cartItems as $item) 
			{
				$ordItemData[$i]['order_id']     = $insertOrder;
                $ordItemData[$i]['product_id']     = $item['id'];
                $ordItemData[$i]['quantity']     = $item['qty'];
                $ordItemData[$i]['sub_total']     = $item["subtotal"];
                $i++;
			}
			if(!empty($ordItemData))
			{
			$insertOrderItems = $this->Majesticmodels->insert_order_items('order_items',$ordItemData);
			if($insertOrderItems)
			{
				$this->cart->destroy();

				return $insertOrder;
			}
			}
		}return false;
	}

	public function orderSucces($ordID)
	{
		$where = array('id' => $ordID);
		$data['Order'] = $this->Majesticmodels->get_where('orders' , $where)->result();
		$get_customer = array('id_customer' => $data['Order'][0]->id_customer);
		$get_order_id = array('order_id' => $ordID);
		$data['Customer'] = $this->Majesticmodels->get_where('customer' , $get_customer)->result();
		$data['Order_items'] = $this->Majesticmodels->get_where('order_items' , $get_order_id)->result();
		$data['Product'] = $this->Majesticmodels->get_data('product')->result();
		$data['title'] = 'Confirmation';
        $this->load->view('frontend/templates/Header',$data);
		$this->load->view('frontend/Confirmation',$data);
        $this->load->view('frontend/templates/Footer');
	}

	public function getcity()
	{
		$id_province = $_POST["id_province"];
		//Get city From Raja Ongkir API
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province=".$id_province,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"key: ",
		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);


		if ($err) {
		$city = array('error' => true);
		} else {
		$city = json_decode($response,true); 

		foreach($city['rajaongkir']['results'] as $c ) {
			echo "<li data-value=".$c['city_id']." class='option'>" . $c['type'] . " " . $c['city_name'] ."</li>";
		}
		}
	}
	

	public function getcost()
	{
		$courier = $_POST["courier"];
		$id_distrik = $_POST["id_distrik"];
		$weight = $_POST["weight"];
		
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "origin=501&destination=$id_distrik&weight=$weight&courier=".$courier,
		CURLOPT_HTTPHEADER => array(
			"content-type: application/x-www-form-urlencoded",
			"key: "
		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		//echo "cURL Error #:" . $err;
		$cost = array("error" => true);
		} else {
		//echo $response;
		$cost = json_decode($response,true);

		foreach($cost['rajaongkir']['results'][0]['costs'] as $c) {
			echo "<li data-value=".$c['cost'][0]['value'] ." class='option'>" . $c['service'] . " ( " . $c['description'] . " ) " ."</li>";
		}
		}
	}

	

	public function _rules()
	{
		$this->form_validation->set_rules('name','Name','required', array(
            'required' => '*'
        ));
        $this->form_validation->set_rules('email','Email','required', array(
			'required' => '*'
        ));
        $this->form_validation->set_rules('number','Phone Number','required', array(
            'required' => '*'
        ));
		$this->form_validation->set_rules('input_province','Input_province','required', array(
            'required' => '*'
        ));
		$this->form_validation->set_rules('input_distrik','input_distrik','required', array(
            'required' => '*'
        ));
		$this->form_validation->set_rules('input_courier','input_courier','required', array(
            'required' => '*'
        ));
		$this->form_validation->set_rules('street','street','required', array(
            'required' => '*'
        ));
	}

	public function token()
    {
		$total = $this->input->get('total');
		$id = $this->input->get('id');
		$id_orders = array('id' => $id);
		$data['Orders'] = $this->Majesticmodels->get_where('orders',$id_orders)->result();
		$where_customer = array('id_customer' => $data['Orders'][0]->id_customer );
		$data['Customer'] = $this->Majesticmodels->get_where('customer', $where_customer)->result();
		

		// Required
		$transaction_details = array(
		  'order_id' => rand(),
		  'gross_amount' => $total, // no decimal allowed for creditcard
		);
		
		// Optional
		$billing_address = array(
		  'first_name'    	  => "Majestic",
		  'address'       => "Golo Indah Gang 1 No 14",
		  'phone'         => "089522665029",
		  'country_code'  => 'IDN'
		);

		// Optional
		$shipping_address = array(
		  'first_name'    	  => $data['Customer'][0]->name,
		  'address'       	  => $data['Customer'][0]->address,
		  'phone'         	  => $data['Customer'][0]->phone,
		  'country_code'      => 'IDN'
		);

		// Optional
		$customer_details = array(
		  'first_name'    		 => $data['Customer'][0]->name,
		  'email'        	 	 => $data['Customer'][0]->email,
		  'phone'         	 	 => $data['Customer'][0]->phone,
		  'billing_address'  	 => $billing_address,
		  'shipping_address' 	 => $shipping_address,
		  'customer_field' 		 => array(
			'id_customer' 		 => $data['Customer'][0]->id_customer
		  ),
		);

		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'day', 
            'duration'  => 1
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
		$data = array(
			'snap_token' => $snapToken,
			'transaction_id' => $transaction_details['order_id']
		);
		$this->Majesticmodels->update_data($data,'orders','id',$id);
    }

    public function finish()
    {
    	$result = json_decode($this->input->post('result_data'));
		$where = array('transaction_id' => $result->order_id);
		$orders = $this->Majesticmodels->get_where('orders',$where)->result();
		$where = $this->input->post('id');
		$data = array(
			'status' => 2,
			'payment' => $result->payment_type
		);
		$this->Majesticmodels->update_data($data,'orders','id',$where);
		redirect('Checkout/orderSucces/' . $orders[0]->id);

    }

	public function payment_finish()
	{
		$order_id = $this->input->get('order_id');
		$where = array('transaction_id' => $order_id);
		$orders = $this->Majesticmodels->get_where('orders',$where)->result();
		if($this->input->get('transaction_status') == 'pending')
		{
			redirect('Checkout/orderSucces/' . $orders[0]->id);
		}
		else
		{
			$data = array(
				'status' => 3
			);
			$this->Majesticmodels->update_data($data,'orders','transaction_id',$order_id);
			redirect('Checkout/orderSucces/' . $orders[0]->id);
		}
	}

	public function unfinish_payment()
	{
		$order_id = $this->input->get('order_id');
		$where = array('transaction_id' => $order_id);
		$orders = $this->Majesticmodels->get_where('orders',$where)->result();
		$status = $this->midtrans->status($order_id);
		$data = array(
			'status' => 2,
			'payment' => $status->payment_type
		);
		$this->Majesticmodels->update_data($data,'orders','transaction_id',$order_id);
		
	}

	public function error_payment()
	{
		$this->load->view('frontend/error');
	}


}
