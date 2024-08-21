<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Majesticmodels');
		is_logged_in();
	}

    public function index()
    {
        $data['title'] = 'Transaction';
        $data['Orders'] = $this->Majesticmodels->get_data('orders')->result();
		$data['Order_items'] = $this->Majesticmodels->get_data('order_items')->result();
        $data['Product'] = $this->Majesticmodels->get_data('product')->result();
		$this->load->view('backend/template/Header',$data);
		$this->load->view('backend/template/Sidebar');
    	$this->load->view('backend/Orders');
		$this->load->view('backend/template/Footer');
    }

	public function processing($id)
	{
		$data = array(
			'status' => 9
		);
		$this->Majesticmodels->update_data($data,'orders','id',$id);
        $this->session->set_flashdata('pesan','
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Congratulations</strong> Order Succesfuly Changed to Processing
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
        </div>'
         );
        redirect('admin/Orders');
	}

	public function shipping($id)
	{
		$this->_rules();

        if($this->form_validation->run() == false)
        {
            $this->index();
        }
		else
		{
			$where = array('order_id' => $id);
			$data['Order_items'] = $this->Majesticmodels->get_where('order_items' ,$where)->result();

			foreach ($data['Order_items'] as $ordi) {
				$product = $this->Majesticmodels->get_where('product',array('id_product' => $ordi->product_id))->row_array();
				$data = array(
					'stock' => $product['stock'] - $ordi->quantity
				);
				$this->Majesticmodels->update_data($data,'product','id_product',$product['id_product']);
			}
        	
			$data = array(
				'status' => 10,
				'receipt' => $this->input->post('resi')
			);
			$this->Majesticmodels->update_data($data,'orders','id',$id);
			$this->session->set_flashdata('pesan','
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Congratulations</strong> Order Succesfuly Changed to Shipping
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
			</div>'
			);
        	redirect('admin/Orders');
		}
	}

	public function orders_detail($id)
	{
		$where = array('id' => $id) ;
        $data['Order'] = $this->Majesticmodels->get_where('orders',$where)->result();
		if($data['Order'][0]->id_user == null)
		{
			$get_data_customer = array('id_customer' => $data['Order'][0]->id_customer);
			$data['Customer'] = $this->Majesticmodels->get_where('customer',$get_data_customer)->result();
		}
		else
		{
			$get_user_adress = array('id' => $data['Order'][0]->id_user);
			$data['Customer'] = $this->Majesticmodels->get_where('user_address',$get_user_adress)->result();
		}
		$get_order_item = array('order_id' => $data['Order'][0]->id) ;
		$data['Order_items'] = $this->Majesticmodels->get_where('order_items',$get_order_item)->result();
		$data['Product'] = $this->Majesticmodels->get_data('product')->result();
		$this->load->view('backend/template/Header',$data);
		$this->load->view('backend/template/Sidebar');
    	$this->load->view('backend/detail/Orders');
		$this->load->view('backend/template/Footer');
	}

	public function _rules()
    {
        $this->form_validation->set_rules('resi','Receipt','required', array(
            'required' => '*'
        ));
    }
}

?>