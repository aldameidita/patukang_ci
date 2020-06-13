<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_penyewaan extends CI_Controller {
	function __construct(){
    parent::__construct();
    $this->load->model('patukang_model');

  }

	function sewatukang(){
	
  	$id_customer = $this->input->post('id_customer');
    $id_tukang = $this->input->post('id_tukang');
         
    $data['user'] = $this->db->get_where('tb_customer',['id_customer'=>$id_customer])->result();
         
    $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$id_customer])->result();

    $data['detail_tukang'] = $this->patukang_model->getdetailtukang($id_tukang)->result();
    $data['rating'] = $this->patukang_model->rating_tukang($id_tukang);

    $response = array(
				'status' => "true",
				'data' => $data
	);
  		echo json_encode($response);
		
    }
	
  function cek_sewa(){

	    $id_customer = $this->input->post('id_customer');
      $id_tukang = $this->input->post('id_tukang');
      $alamat_sewa = $this->input->post('alamat_sewa');
      $luas_sewa = $this->input->post('luas_sewa');
      $detail_sewa = $this->input->post('detail_sewa');
      $total_sewa = $this->input->post('total_sewa');
      $tgl_sewa = $this->input->post('tgl_sewa');
      $cek_tgl = $this->input->post('tgl_now');

       $data = array(
      'id_customer' => $id_customer,
      'id_tukang' => $id_tukang,
      'alamat_sewa' => $alamat_sewa,
      'luas_sewa' => $luas_sewa,
      'detail_sewa' => $detail_sewa,
      'total_sewa' => $total_sewa,
      'tgl_sewa' => $tgl_sewa,
      'status_sewa' => '0'
      );
   
		if ($cek_tgl>$tgl_sewa) {

			 $response = array(
				'status' => "false",
				'data' => $data
	     );
  		echo json_encode($response);

      }else{

       $q = $this->patukang_model->sewa($data);

       $response = array(
				'status' => "",
				'data' => $data
	);
  		echo json_encode($response);

	}	
  }

    function terima_sewa(){

    $id_sewa =$this->input->post('id_sewa');
    
    $data = array(
      'status_sewa' => '1'
    );
    
	$this->patukang_model->terima_pesanan($data,$id_sewa);

    $response = array(
      'data' => $data,
      'stat' => 'true'
    );
    echo json_encode($response);  
   }

    function tolak_sewa(){

    $id_sewa =$this->input->post('id_sewa');
    
    $data = array(
      'status_sewa' => '2'
    );
    
    $this->patukang_model->tolak_pesanan($data,$id_sewa);
    
    $response = array(
      'data' => $data,
      'stat' => 'true'
    );
    echo json_encode($response);  
   }


   function detail_sewa_cus(){

    $id_sewa =$this->input->post('id_sewa');
    $id_customer =$this->input->post('id_customer');

    $data['user'] = $this->db->get_where('tb_customer',['id_customer'=>$id_customer])->result();
    $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$id_customer])->result();
    $data['detail'] =  $this->db->get_where('tb_sewa',['id_sewa'=>$id_sewa])->result();
    
    $response = array(
      'data' => $data,
      'stat' => 'true'
    );
    echo json_encode($response);  
   }

   function detail_sewa_tukang(){

    $id_sewa = $this->input->post('id_sewa');
    $id_customer =$this->input->post('id_customer');
    
    $data['user'] = $this->db->get_where('tb_customer',['id_customer'=>$id_customer])->result();
    $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$id_customer])->result();
    $data['detail'] =  $this->db->get_where('tb_sewa',['id_sewa'=>$id_sewa])->result();
    $data['customer'] = $this->patukang_model->detail_sewa_tuk($id_sewa)->result();
    
    $response = array(
      'data' => $data,
      'stat' => 'true'
    );
    echo json_encode($response);  
   }

}