<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('Majesticmodels');
		if(!$this->session->userdata('email'))
        {
            $this->session->set_flashdata('message' , '<div class="alert alert-danger">Please Login First to Acces Wishlist Features <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			  </button></div>');
            redirect('Login');
        }
        
	}

    public function index()
    {
        $data['title'] = 'Wishlist';
        $data['User'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->result();
        $data['Wishlist'] = $this->Majesticmodels->get_data('wishlist')->result();
		$this->load->view('frontend/templates/Header',$data);
		$this->load->view('frontend/Wishlist',$data);
		$this->load->view('frontend/templates/Footer');
    }

    public function add_to_wishlist($id_product)
    {
        $where = array('id_product' => $id_product);
        $data['Product'] = $this->Majesticmodels->get_where('product',$where)->result();
        $data['User'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->result();
        $data['Wishlist'] = $this->Majesticmodels->get_data('wishlist')->result();

        foreach($data['Wishlist'] as $w) 
        {
            if($w->id_customer == $data['User'][0]->id && $w->id_product == $data['Product'][0]->id_product)
            {
                redirect('Wishlist');
            }
            else
            {
                continue;
            }
        }

        if($data['Product'][0]->promo == null)
        {
            $wishlist = array(
                'id_customer' => $data['User'][0]->id,
                'id_product'  => $data['Product'][0]->id_product,
                'name'        => $data['Product'][0]->name,
                'img'         => $data['Product'][0]->img,
                'price'       => $data['Product'][0]->price,
            );
        }
        else
        {
            $wishlist = array(
                'id_customer' => $data['User'][0]->id,
                'id_product'  => $data['Product'][0]->id_product,
                'name'        => $data['Product'][0]->name,
                'img'         => $data['Product'][0]->img,
                'price'       => $data['Product'][0]->promo,
            );
        }
        
        $this->Majesticmodels->insert_data($wishlist,'wishlist');
        redirect('Wishlist');
    }
}

?>