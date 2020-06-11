<?php

class login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('patukang_model');
	}

	public function cek_login()
	{
		
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$cek = $this->db->get_where('tb_customer',['email'=>$email])->row_array();
		
		if ($cek) {

			if (password_verify($password, $cek['password'])) {
			
			$data = [

				'id_customer' => $cek['id_customer'],
				'nam_leng' => $cek['nam_leng'],
				'email' => $cek['email'],
				'status_tukang' => $cek['status_tukang'],
				'status' => '1'
			
			];

			$this->session->set_userdata($data);
			redirect('projek/patukang/beranda');

		}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:12px" role="alert">Login Gagal ! Email atau Password Salah</div>');
			redirect('projek/patukang');
		}
		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:12px" role="alert">Login Gagal ! User Belum Terdaftar</div>');
			redirect('projek/patukang');
		}
	}
}
?>