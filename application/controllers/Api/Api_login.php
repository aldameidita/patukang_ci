<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_login extends CI_Controller {
	function __construct(){
    parent::__construct();
    $this->load->model('patukang_model');

  }

	function login(){
	
  	$email = $this->input->post('email');
    $password = $this->input->post('password');

		$cek = $this->db->get_where('tb_customer',['email'=>$email])->row_array();
		
    if ($cek!=0) {
			
      if (password_verify($password, $cek['password'])) {
	
  		$response = array(
				'status' => "true",
				'message' => "Login Sukses",
				'data' => $cek
			);
	
  		echo json_encode($response);
		
    }else {
			$response = array(
				'status' => "false",
				'message' => "Password Salah"
			);
			echo json_encode($response);
		}
	}else{
    $response = array(
        'status' => "false",
        'message' => "Akun tidak ditemukan"
      );
      echo json_encode($response);
  }
}
	
  function register(){

	$data['nam_leng'] = $this->input->post('nam_leng');
    $data['no_telp'] = $this->input->post('no_telp');
	$data['alamat'] = $this->input->post('alamat');
    $data['email'] = $this->input->post('email');
	$data['password'] = password_hash($this->input->post('password'),PASSWORD_DEFAULT);
    $data['pembuatan_data'] = time();
   
		$cek = $this->db->get_where('tb_customer',['email'=>$data['email']])->row_array();
		if ($cek==0) {
			$regis = $this->patukang_model->registerAkun1($data,'tb_customer');
			if ($regis!=0) {
				$response = array(
					'status' => "success",
					'message' => "Registrasi berhasil"
				);
				echo json_encode($response);
			}else {
				$response = array(
					'status' => "fail",
					'message' => "Registrasi gagal"
				);
				echo json_encode($response);
			}
		}else {
			$response = array(
				'status' => "fail",
				'message' => "Email telah terdaftar"
			);
			echo json_encode($response);
		}
	}
}
