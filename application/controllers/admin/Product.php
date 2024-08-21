<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        //Loading Majesticmodels
        $this->load->model('Majesticmodels');
        //Loading is_logged_in() from majestic_helper
		is_logged_in();
	}

	public function index()
	{
        //Get All data in Product Table From majestic database 
        $data['Product'] = $this->Majesticmodels->get_data('product')->result();
		$this->load->view('backend/template/Header');
        $this->load->view('backend/template/Sidebar');
        $this->load->view('backend/Product',$data);
        $this->load->view('backend/template/Footer');
	}

    public function tambah()
	{
		$this->load->view('backend/template/Header');
        $this->load->view('backend/template/Sidebar');
        $this->load->view('backend/tambah/Product');
        $this->load->view('backend/template/Footer');
	}

    public function detail($id_product)
	{
        //Get a spesific row base on id_product in Product Table From Majestic database
        $where = array('id_product' => $id_product);
        $data['Product'] = $this->Majesticmodels->get_where('product',$where)->result();
		$this->load->view('backend/template/Header');
        $this->load->view('backend/template/Sidebar');
        $this->load->view('backend/detail/Product',$data);
        $this->load->view('backend/template/Footer');
	}

    public function update($id_product)
	{
         //Get a spesific row base on id_product in Product Table From Majestic database
        $where = array('id_product' => $id_product);
        $data['Product'] = $this->Majesticmodels->get_where('product',$where)->result();
		$this->load->view('backend/template/Header');
        $this->load->view('backend/template/Sidebar');
        $this->load->view('backend/update/Product',$data);
        $this->load->view('backend/template/Footer');
	}

    public function tambah_data()
    {
        //Loading Rules for form input
        $this->_rules();

        //Checking is form validation is false or true
        if($this->form_validation->run() == false)
        {
            //If form validation is false user will be back to tambah() 
            $this->tambah();
        }
        else 
        {
            // Get the name of input file with name img
            $new_filename = $_FILES['img']['name'];
            //Rewrite the name of file that will be uploaded
            $new_name = "product" . ""  . str_replace(' ','-',$new_filename);
            //Setting a config for upload library
            $config = [
                'upload_path' => './upload/product/',
                'allowed_types' => 'jpg|png|jpeg|webp', 
                'file_name' => $new_name,
            ];
            //Loading Upload library and load the config that already set before
            $this->load->library('upload',$config);
            //Make a condition where upload is succes or fail
            if ( ! $this->upload->do_upload('img'))
                {
                    //Loading a view if the upload was failed
                    $this->load->view('backend/template/Header');
                    $this->load->view('backend/template/Sidebar');
                    $this->load->view('backend/tambah/Product');
                    $this->load->view('backend/template/Footer');
                } 
            else
            {
                //Get a file name that was uploaded before and upload it to database if the upload was success
                $img = $this->upload->data('file_name');
                $data = array(
                    'name' => $this->input->post('name'),
                    'img' => $img,
                    'price' => $this->input->post('price'),
                    'promo' => $this->input->post('promo'),
                    'filter' => $this->input->post('filter'),
                    'category' => $this->input->post('category'),
                    'stock' => $this->input->post('stock'),
                    'weight' => $this->input->post('weight'),
                    'short_desc' => $this->input->post('short_desc'),
                    'full_desc' => $this->input->post('full_desc'),
                );
                $this->Majesticmodels->insert_data($data,'product');
                $this->session->set_flashdata('pesan','
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Selamat</strong> Data Succesful Added
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
                );
                //Redirect to product() when the data already uploaded into database
                redirect('admin/Product');
            }
        }
    }

    //Setting a rule for from input 
    public function _rules()
    {
        $this->form_validation->set_rules('name','Product Name','required', array(
            'required' => '%s Must Filled'
        ));
        $this->form_validation->set_rules('price','Price','required', array(
            'required' => '%s Must Filled'
        ));
        $this->form_validation->set_rules('stock','Stock','required', array(
            'required' => '%s Must Filled'
        ));
        $this->form_validation->set_rules('weight','Weight','required', array(
            'required' => '%s Must Filled'
        ));
        $this->form_validation->set_rules('short_desc','Short Description','required', array(
            'required' => '%s Must Filled'
        ));
        $this->form_validation->set_rules('full_desc','Full Description','required', array(
            'required' => '%s Must Filled'
        ));
    }

    public function update_data($id_product)
    {
        //Loading Rules for from input
        $this->_rules();

         //Checking is form validation is false or true
        if($this->form_validation->run() == false )
        {
            //if form validation is false user will be back to update()
            $this->update($id_product);
        }
        else
        {
            //Load old img name file from input hidden 
            $old_filename = $this->input->post('old_img');
            //Load new name file that the user wants to upload
            $new_filename = $_FILES['img']['name'] ;

            //Check if new filename is exist or not
            if($new_filename == true)
            {
                //Rewrite the name of file that will be uploaded
                $update_filename = "product"."".str_replace(' ','-',$_FILES['img']['name']);
                //Setting a config for upload library
                $config = [
                    'upload_path' => './upload/product/',
                    'allowed_types' => 'jpg|png|jpeg|webp', 
                    'file_name' => $update_filename,
                ];

                //Loading Upload library and load the config that already set before
                $this->load->library('upload',$config);

                //Check the upload is succes or fail
                if($this->upload->do_upload('img'))
                {
                    //Check if old img exits or not when uploading new img is succes
                    if(file_exists("./upload/product/" . $old_filename))
                    {
                        //delete the old img if old img exits
                        unlink("./upload/product/" . $old_filename);
                    }
                }
            }
            else 
            {
                //If the new img is not exits then the img to be uploaded is an old img
                $update_filename = $old_filename ;
            }
           
            
            $img = $update_filename ;
            $data = array(
                'name' => $this->input->post('name'),
                'img' => $img,
                'price' => $this->input->post('price'),
                'promo' => $this->input->post('promo'),
                'filter' => $this->input->post('filter'),
                'category' => $this->input->post('category'),
                'stock' => $this->input->post('stock'),
                'weight' => $this->input->post('weight'),
                'short_desc' => $this->input->post('short_desc'),
                'full_desc' => $this->input->post('full_desc'),
            );
            $this->Majesticmodels->update_data($data,'product','id_product',$id_product);
            $this->session->set_flashdata('pesan','
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Selamat</strong> Data Succesful Changed
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
                );
            redirect('admin/Product');
        }
    }

    public function delete($id_product)
    {
        $Product = new Majesticmodels ;
        $where = array('id_product' => $id_product);
        if($Product->Checkimg($where,'product'))
        {
            $data = $Product->Checkimg($where,'product');

            if(file_exists("./upload/product/" . $data->img))
            {
                unlink("./upload/product/" . $data->img);
            }
            $Product->deleteimg($where,'product');
            $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Selamat</strong> Data berhasil dihapus
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/Product');
        }
    }
}