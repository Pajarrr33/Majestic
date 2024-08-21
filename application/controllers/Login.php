<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('Majesticmodels');
	}

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
    
        $user = $this->db->get_where('user', ['email' =>  $email])->row_array();

        //Jika ada user
        if($user) {
            //Jika user aktif
            if($user['is_active'] == 1 ) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];

                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1 ) {
                        date_default_timezone_set('Asia/Jakarta');
                        $timestamp = time();
                        $data = [
                            'email' => $user['email'],
                            'username' => $user['nama'],
                            'date' => date("Y-m-d H:i:s",$timestamp)
                        ];
                        $this->Majesticmodels->insert_data($data,'activity_log');
                        redirect('admin/Dashboard');
                    } else {
                        redirect('User');
                    }

                } else {
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Wrong password <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					  </button></div>');
                    redirect('User');
                }
            } else {
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Sorry! This email has not been actived! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				  </button></div>');
                redirect('User');
            }
        } else {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"> Sorry! This email has not Sign Up yet! Please Sign Up First <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			  </button></div>');
			redirect('User');
		}


    }

	public function index()
	{
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required');

		if($this->form_validation->run() == false){
			$data['title'] = 'Login';
			$this->load->view('frontend/templates/Header',$data);
			$this->load->view('profile/Login');
			$this->load->view('frontend/templates/Footer');
		} else {
			$this->_login();
		}
	}

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" > You have been logout <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  	</button> </div> ');
        redirect('Login');
    }
}