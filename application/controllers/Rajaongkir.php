<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rajaongkir extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Majesticmodels');
	}

	public function index()
	{
       echo "Raja Ongkir API Gateaway" ;
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

    public function cost()
	{
		$courier = $_POST["courier"];
		$id_distrik = $_POST["id_distrik"];
		$weight = $_POST["weight"];
        $province = $this->Majesticmodels->get_data('merchant')->result();
        $origin = $province[0]->id_distrik ;
		
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "origin=$origin&destination=$id_distrik&weight=$weight&courier=".$courier,
		CURLOPT_HTTPHEADER => array(
			"content-type: application/x-www-form-urlencoded",
			"key: af7af86a41e30c52f0dad6a8a058a955"
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
            echo "<option  value=".$c['cost'][0]['value'] ." >" . $c['service'] . " ( " . $c['description'] . " ) " . "</option>" ;
		}
		}
	}
}