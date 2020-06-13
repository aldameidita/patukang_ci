<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_pembayaran extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('patukang_model');
  }

  function bayar_sewa(){

     $id_sewa = $this->input->post('id_sewa');
     $id_customer = $this->input->post('id_customer');

      $data['user'] = $this->db->get_where('tb_customer',['id_customer'=>$id_customer])->result();
      $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$id_customer])->result();
      $data['detail'] =  $this->db->get_where('tb_sewa',['id_sewa'=>$id_sewa])->result();
      $data['customer'] = $this->patukang_model->detail_sewa_tuk($id_sewa)->result();

    $response = array(
      'data' => $data
    );
    echo json_encode($response);
  }

  function cek_bayar(){

      $status_sewa = $this->input->post('status_sewa');
      $id_sewa = $this->input->post('id_sewa');
      $no_rek_cus = $this->input->post('no_rek_cus');
      $no_rek_admin = $this->input->post('no_rek_admin');
      $tgl_pemb = $this->input->post('tgl_pemb');

      $data = array(
      'id_sewa' => $id_sewa,
      'no_rek_cus' => $no_rek_cus,
      'no_rek_admin' => $no_rek_admin,
      'tgl_pemb' => $tgl_pemb,
      'status_pemb_cus' => '0'
      );


    $data1['status_sewa'] = $status_sewa;
   
    $this->patukang_model->update_status_bayar($id_sewa,$data1);

    $response = array(
      'data' => $data,
      'stat' => 'true'
    );
    echo json_encode($response);

      $foto_diri = $this->input->post('foto_transaksi');
      
      $path = 'upload/foto_transaksi/';
      $file = uniqid().'.jpg|png|jpeg';
      $file_path = $path.$file;

      file_put_contents($file_path);

      $data = array( 'foto_transaksi' => $file );

      $this->db->insert('tb_pembayaran_cus',$data);
      
      $config['source_image'] = 'upload/foto_transaksi/'.$file;
      $config['create_thumb']= FALSE;
      $config['maintain_ratio']= FALSE;
      $config['quality']= '50%';
      $config['new_image'] = 'upload/foto_transaksi/'.$file;
      
      $this->load->library('image_lib', $config);
      $this->image_lib->resize();
 

    $id_sewa = array('id_sewa' => $id_sewa);
    
    $response = array(
      'data' => $id_sewa,
      'stat' => 'true'
    );
    echo json_encode($response);
  
  }

    function beri_rating(){

         $id_sewa = $this->input->post('id_sewa');
         $id_tukang = $this->input->post('id_tukang');
         $rating = $this->input->post('rating');
         $status_sewa = $this->input->post('status_sewa');

        $data = array(

        'id' => '',
        'id_tukang' => $id_tukang,
        'rating' => $rating

        );
   
      $data1['status_sewa'] = $status_sewa;
          
      $rating = $this->db->insert('tb_rating',$data);
      
      $this->patukang_model->update_status_rating($id_sewa,$data1);

       $response = array(
        'status' => "",
        'data' => $data
    );
      echo json_encode($response);

    }

 
}
