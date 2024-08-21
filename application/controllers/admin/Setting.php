<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Majesticmodels');
		is_logged_in();
	}

	public function index()
	{
        $data['User'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')]) ->row_array();
        $data['Merchant'] = $this->Majesticmodels->get_data('merchant')->result();
		$this->load->view('backend/template/Header');
        $this->load->view('backend/template/Sidebar');
        $this->load->view('backend/Setting',$data);
        $this->load->view('backend/template/Footer');
	}

    public function update_data($id)
    {
        $this->_rules();

        if($this->form_validation->run() == false )
        {
            $this->index();
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
            );
            $this->Majesticmodels->update_data($data,'user',$id,$where);
            $this->session->set_flashdata('account','
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Congratulations</strong> Data Succesful Changed
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
                );
            redirect('admin/Setting');
        }
    }

    public function update_merchant($where)
    {
        $this->_rules2();

        if($this->form_validation->run() == false)
        {
            $this->index();
        }
        else
        {
            $data = array(
               'id_province'    => $this->input->post('province'),
               'id_distrik'     => $this->input->post('distrik'),
               'name'           => $this->input->post('name'),
               'email'          => $this->input->post('email'),
               'phone'          => $this->input->post('phone'),
               'province'       => $this->input->post('input_province'),
               'distrik'        => $this->input->post('input_distrik'),
               'street'         => $this->input->post('street')
            );
            $this->Majesticmodels->update_data($data,'merchant','id',$where);
            $this->session->set_flashdata('account','
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Congratulations</strong> Data Succesful Changed
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>'
            );
            redirect('admin/Setting');
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
        $this->form_validation->set_rules('input_province','input_province','required', array(
            'required' => '*'
        ));
        $this->form_validation->set_rules('input_province','input_province','required', array(
            'required' => '*'
        ));
        $this->form_validation->set_rules('name','name','required', array(
            'required' => '*'
        ));
        $this->form_validation->set_rules('email','email','required', array(
            'required' => '*'
        ));
        $this->form_validation->set_rules('phone','phone','required', array(
            'required' => '*'
        ));
        $this->form_validation->set_rules('street','street','required', array(
            'required' => '*'
        ));
    }

    public function province()
    {
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
			"key: af7af86a41e30c52f0dad6a8a058a955"
		),
		));

		$responses = curl_exec($cur);
		$error = curl_error($cur);

		curl_close($cur);

		if ($error) {
		$province = array('error' =>true);
		} else {
		$province = json_decode($responses);

        foreach($province->rajaongkir->results as $p) {
            echo "<option  value=".$p->province_id. " >" . $p->province . "</option>" ;
        }
		}
    }

    public function distrik()
    {
        $id_province = $_POST["id_province"] ;
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
			"key: af7af86a41e30c52f0dad6a8a058a955",
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
            echo "<option  value=".$c['city_id']." >" . $c['type'] . " " . $c['city_name'] . "</option>" ;
		}
		}
    }
}