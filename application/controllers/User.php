<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Majesticmodels');		
		is_logged_in();
	}


	public function index()
	{
		$data['title'] = 'Profile';
		$data['User'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) ->row_array();
        $where = array('id_user' => $data['User']['id']);
        $data['Adress'] = $this->Majesticmodels->get_where('user_address', $where)->result();
		$this->load->view('frontend/templates/Header',$data);
		$this->load->view('profile/User',$data);
		$this->load->view('frontend/templates/Footer');
	}

	public function update_profile()
	{
		$data['title'] = 'Profile Edit';
		$data['User'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) ->row_array();
		$this->load->view('frontend/templates/Header',$data);
		$this->load->view('profile/Update_user',$data);
		$this->load->view('frontend/templates/Footer');
	}

    public function order($status)
    {
        if($status == 'paid')
        {
            $transaction_status = 3;
            $data['title'] = 'Order Paid';
        }
        elseif($status == 'processed')
        {
            $transaction_status = 9;
            $data['title'] = 'Order Processed';
        }
        elseif($status == 'sent')
        {
            $transaction_status = 10;
            $data['title'] = 'Order Sent';
        }
        elseif($status == 'done')
        {
            $transaction_status = 11;
            $data['title'] = 'Order Done';
        }
		$data['User'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) ->row_array();
        $data['Order'] = $this->Majesticmodels->get_orders('orders' , $data['User']['id'],$transaction_status)->result();
        $data['Order_items'] = $this->Majesticmodels->get_data('order_items')->result();
        $data['Product'] = $this->Majesticmodels->get_data('product')->result();
		$this->load->view('frontend/templates/Header',$data);
		$this->load->view('profile/Order',$data);
		$this->load->view('frontend/templates/Footer');
    }

    public function add_adress()
    {
        $data['title'] = 'Add Adress';
		$data['User'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) ->row_array();
		$this->load->view('frontend/templates/Header',$data);
		$this->load->view('profile/Add_adress',$data);
		$this->load->view('frontend/templates/Footer');
    }

    public function update_adress($id)
    {
        $data['title'] = 'Add Adress';
		$data['User'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) ->row_array();
        $where = array('id' => $id) ;
        $data['Adress'] = $this->Majesticmodels->get_where('user_address',$where)->result();
		$this->load->view('frontend/templates/Header',$data);
		$this->load->view('profile/Update_adress',$data);
		$this->load->view('frontend/templates/Footer');
    }

    public function confirm($id)
    {
        $where = array('id' => $id);
        $data['Order'] = $this->Majesticmodels->get_where('orders',$where)->result();
        if($data['Order'][0]->status == 10)
        {
            $data = array('status' => 11);
            $this->Majesticmodels->update_data($data,'orders','id',$id);
            redirect('User/order/done');
        }
    }
    public function add_user_adress()
    {
        $this->_rules2();

        if($this->form_validation->run() == false)
        {
            $this->add_adress();
        }
        else
        {
            $data['User'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) ->row_array();
            $data = array(
                'id_user'       => $data['User']['id'],
                'id_province'   => $this->input->post('province'),
                'id_distrik'    => $this->input->post('distrik'),
                'address_name'  => $this->input->post('adress_name'),
                'name'          => $this->input->post('name'),
                'email'         => $this->input->post('email'),
                'phone'         => $this->input->post('number'),
                'province'      => $this->input->post('input_province'),
                'distrik'       => $this->input->post('input_distrik'),
                'street'        => $this->input->post('street'),
            );
            $this->Majesticmodels->insert_data($data,'user_address');
            redirect('User');
        }
    }

    public function update_user_adress($id)
    {
        $this->_rules2();

        if($this->form_validation->run() == false)
        {
            $this->update_adress($id);
        }
        else
        {
            $data = array(
                'id_province'   => $this->input->post('province'),
                'id_distrik'    => $this->input->post('distrik'),
                'address_name'  => $this->input->post('adress_name'),
                'name'          => $this->input->post('name'),
                'email'         => $this->input->post('email'),
                'phone'         => $this->input->post('number'),
                'province'      => $this->input->post('input_province'),
                'distrik'       => $this->input->post('input_distrik'),
                'street'        => $this->input->post('street'),
            );
            $this->Majesticmodels->update_data($data,'user_address','id',$id);
            redirect('User');
        }
    }

	public function _rules()
    {
        $this->form_validation->set_rules('username','Username','required', array(
            'required' => '%s Must Filled'
        ));
        $this->form_validation->set_rules('email','Email','required', array(
            'required' => '%s Must Filled'
        ));
    }

    public function _rules2()
    {
        $this->form_validation->set_rules('province','province','required', array(
            'required' => '*'
        ));
        $this->form_validation->set_rules('distrik','distrik','required', array(
            'required' => '*'
        ));
        $this->form_validation->set_rules('adress_name','adress_name','required', array(
            'required' => '*'
        ));
        $this->form_validation->set_rules('name','name','required', array(
            'required' => '*'
        ));
        $this->form_validation->set_rules('email','email','required', array(
            'required' => '*'
        ));
        $this->form_validation->set_rules('number','number','required', array(
            'required' => '*'
        ));
        $this->form_validation->set_rules('input_province','input_province','required', array(
            'required' => '*'
        ));
        $this->form_validation->set_rules('input_distrik','input_distrik','required', array(
            'required' => '*'
        ));
        $this->form_validation->set_rules('street','street','required', array(
            'required' => '*'
        ));
    }

	public function update_data($id)
    {
        $this->_rules();

        if($this->form_validation->run() == false )
        {
            $this->update_profile();
        }
        else
        {
            $old_filename = $this->input->post('old_img');
            $new_filename = $_FILES['img']['name'] ;

            if($new_filename == true)
            {
                $update_filename = "pp"."".str_replace(' ','-',$_FILES['img']['name']);
                $config = [
                    'upload_path' => './upload/pp/',
                    'allowed_types' => 'jpg|png|jpeg|webp', 
                    'file_name' => $update_filename,
                ];
                $this->load->library('upload',$config);

                if($this->upload->do_upload('img'))
                {
                    if(file_exists("./upload/pp/" . $old_filename))
                    {
                        unlink("./upload/pp/" . $old_filename);
                    }
                }
            }
            else 
            {
                $update_filename = $old_filename ;
            }
            $where = $id ;
            $id = 'id' ;
            $img = $update_filename ;
            $data = array(
                'nama' => $this->input->post('username'),
				'email' => $this->input->post('email'),
                'image' => $img,
                'phone' => $this->input->post('phone'),
                'adress' => $this->input->post('adress'),
            );
            $this->Majesticmodels->update_data($data,'user',$id,$where);
            $this->session->set_flashdata('pesan','
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Selamat</strong> Data Succesful Changed
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
                );
            redirect('User');
        }
    }

}
