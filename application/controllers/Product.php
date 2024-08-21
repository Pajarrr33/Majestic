<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Majesticmodels');
		
	}

	public function index()
	{
		$this->load->library('pagination');

		$data['keyword'] = $this->input->post('keyword');
		$data['filter'] = $this->input->get('Filter');
		$data['category'] = $this->input->get('Category');
		
		$config['base_url'] = base_url('Product');
		if($data['keyword'] == null){
			$data['keyword'] = "";
		}
		if (!empty($data['filter'])) {
			$config['base_url'] .= '?Filter=' . urlencode($data['filter']);
		} 
		if (!empty($data['category'])) {
			$config['base_url'] .= '?Category=' . urlencode($data['category']);
		}
		
		// Build the SQL query
		$this->db->like('name', $data['keyword']);
		$this->db->or_like('filter', $data['keyword']);
		$this->db->or_like('category', $data['keyword']);
		$this->db->or_like('short_desc', $data['keyword']);
		$this->db->or_like('full_desc', $data['keyword']);
		
		if (!empty($data['filter'])) {
			$this->db->where('filter', $data['filter']);
		} 
		if (!empty($data['category'])) {
			$this->db->like('category', $data['category']);
		}

		$this->db->from('product');
		
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 100;

		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';

		$config['prev_tag_open'] = '<a href="" class="prev-arrow"><i class="bi bi-arrow-left" aria-hidden="true" >';
		$config['prev_tag_close'] = '</i></a>';

		$config['next_tag_open'] = '<a href="" class="next-arrow"><i class="bi bi-arrow-right" aria-hidden="true">';
		$config['next_tag_close'] = '</i></a>';

		$config['cur_tag_open'] = '<a href="" class="active">';
		$config['cur_tag_close'] = '</a>';

		$config['last_link'] = false;
		$config['next_link'] = false;

		$data['start'] = $this->uri->segment(3);
		$this->pagination->initialize($config);

		$data['Product'] = $this->Majesticmodels->get_data_product(
			'product',
			$config['per_page'],
			$data['start'],
			$data['keyword'],
			$data['filter'],
			$data['category']
		)->result();
		
		$data['title'] = 'Product';
		$this->load->view('frontend/templates/Header', $data);
		$this->load->view('frontend/Product', $data);
		$this->load->view('frontend/templates/Footer');
	}

	public function single_product($id_product = null)
	{
		if($id_product == null){
			redirect('Product');
		} else {
			$data['Product'] = $this->db->get_where('product', ['id_product' =>  $id_product])->row_array();
			$data['title'] = 'Product';
			$this->load->view('frontend/templates/Header',$data);
			$this->load->view('frontend/Single_product',$data);
			$this->load->view('frontend/templates/Footer');
		}
		
	}
}
