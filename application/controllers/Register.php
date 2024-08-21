<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
    {
        $this->form_validation->set_rules('name','Name','required|trim');
        $this->form_validation->set_rules('email','Email', 'required|trim|valid_email|is_unique[user.email]',[
            'is_unique' => 'This email has been registered'
        ]);

        $this->form_validation->set_rules('password1','Password','required|trim|min_length[8]|matches[password2]' , [

            'matches' => 'Password Not match!' ,
            'min_lenght' => 'Password too short'
        ]);
        $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');


        if($this->form_validation->run() == false){
            $data['title'] = 'Register';
			$this->load->view('frontend/templates/Header',$data);
			$this->load->view('profile/Register');
			$this->load->view('frontend/templates/Footer');
        } else {
            $email = $this->input->post('email',true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('name',true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'adress'=> 'You dont have an address set yet',
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success">Congratulations! Your account has been created, please login <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			  </button></div>');
            redirect('User');
        }
        
    }
}