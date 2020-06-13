<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_home extends CI_Controller {
	function __construct(){
    parent::__construct();
    $this->load->model('patukang_model');
  }
	
  function home(){

    $id_customer = $this->input->post('id_customer');

    $data['user'] = $this->db->get_where('tb_customer',['id_customer'=>$id_customer])->result();  
    $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$id_customer])->result();

      $data['terendah'] = $this->patukang_model->getAllTerendah($id_customer)->result();
      $data['alumunium'] = $this->patukang_model->getAllAlumunium($id_customer)->result();
      $data['keramik'] = $this->patukang_model->getAllKeramik($id_customer)->result();
      $data['atap'] = $this->patukang_model->getAllAtap($id_customer)->result();
      $data['cat'] = $this->patukang_model->getAllCat($id_customer)->result();
      $data['all'] = $this->patukang_model->getAll($id_customer)->result();

      echo json_encode($data);

    }


  function home_terendah(){

    $id_customer = $this->input->post('id_customer');

    $data['user'] = $this->db->get_where('tb_customer',['id_customer'=>$id_customer])->result();  
    $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$id_customer])->result();

      $data['terendah'] = $this->patukang_model->getAllTerendah($id_customer)->result();
    

      echo json_encode($data);

  }


  function home_alumunium(){

     $id_customer = $this->input->post('id_customer');

    $data['user'] = $this->db->get_where('tb_customer',['id_customer'=>$id_customer])->result();  
    $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$id_customer])->result();

      $data['alumunium'] = $this->patukang_model->getAllAlumunium($id_customer)->result();
     
      echo json_encode($data);
  }


  function home_keramik(){

    $id_customer = $this->input->post('id_customer');

    $data['user'] = $this->db->get_where('tb_customer',['id_customer'=>$id_customer])->result();  
    $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$id_customer])->result();

      $data['keramik'] = $this->patukang_model->getAllKeramik($id_customer)->result();
   
      echo json_encode($data);
  }


  function home_cat(){

   $id_customer = $this->input->post('id_customer');

    $data['user'] = $this->db->get_where('tb_customer',['id_customer'=>$id_customer])->result();  
    $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$id_customer])->result();

      $data['cat'] = $this->patukang_model->getAllCat($id_customer)->result();
    

      echo json_encode($data);
  }

   function home_atap(){

   $id_customer = $this->input->post('id_customer');

    $data['user'] = $this->db->get_where('tb_customer',['id_customer'=>$id_customer])->result();  
    $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$id_customer])->result();

      $data['atap'] = $this->patukang_model->getAllAtap($id_customer)->result();
    

      echo json_encode($data);
  }
}