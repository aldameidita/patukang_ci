<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_search extends CI_Controller {
	function __construct(){
    parent::__construct();
    $this->load->model('patukang_model');
		
  }

  function cari(){
	
      $keyword = $this->input->post('keyword');
      $id_customer = $this->input->post('id_customer');
        
      $data['user'] = $this->db->get_where('tb_customer',['id_customer'=>$id_customer])->result();  
      $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$id_customer])->result();
      
      $data['products']=$this->patukang_model->get_product_keyword($keyword,$id_customer);

    echo json_encode($data);
  }

}
