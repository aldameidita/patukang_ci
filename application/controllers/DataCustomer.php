<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataCustomer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model');

	}

	public function index()
	{
		$data = array(
			'table' => $this->model->getData('c.id_customer, k.kecamatan, k.kelurahan, c.nam_leng, c.no_telp, c.alamat, c.email','tb_customer c',['tb_kec k','c.id_kec = k.id_kec'],'','')->result_array()

		);

		$this->load->view('admin/common/top');
		$this->load->view('admin/data-customer/show',$data);
		$this->load->view('admin/common/bottom');
	}
}
