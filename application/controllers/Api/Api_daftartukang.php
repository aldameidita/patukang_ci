<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_daftartukang extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('patukang_model');
  }

  function daftartukang(){

    $id_customer = $this->input->post('id_customer');
    
    $data['user'] = $this->db->get_where('tb_customer',['id_customer'=>$id_customer])->result();
    $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$id_customer])->result();

    $response = array(
      'data' => $data
    );
    echo json_encode($response);
  }

  function regris_tukang(){

  $id_customer = $this->input->post('id_customer');
  $Keahlian = $this->input->post('Keahlian');
  $harga_tukang = $this->input->post('harga_tukang');
  $no_rek = $this->input->post('no_rek');
  $status_tukang = $this->input->post('status_tukang');

  $cek = $this->db->get_where('tb_customer',['id_customer'=>$id_customer])->row_array();
  if ($cek) {

      $data_tukang = array(
      'id_customer' => $id_customer,
      'Keahlian' => $Keahlian,
      'harga_tukang' => $harga_tukang,
      'no_rek' => $no_rek
      );

   $this->db->insert('tb_tukang',$data_tukang);

    $response = array(
      'data' => $data_tukang,
      'stat' => 'true'
    );
    echo json_encode($response);

    }else{
        
        $response = array(
        'status' => "false",
        'message' => "Password Salah"
      );
      echo json_encode($response);
    }

    if ($this->input->post('foto_ktp')!=null) {
      $foto_diri = $this->input->post('foto_ktp');
      
      $path = 'upload/foto_ktp/';
      $file = uniqid().'.jpg|png|jpeg';
      $file_path = $path.$file;

      file_put_contents($file_path);

      $data_customer = array( 'foto_ktp' => $file );
      $data_customer = array( 'id_customer' => $id_customer );

     $this->patukang_model->update_gambar($id_customer,$data_customer);
      
      $config['source_image'] = 'upload/foto_ktp/'.$file;
      $config['create_thumb']= FALSE;
      $config['maintain_ratio']= FALSE;
      $config['quality']= '50%';
      $config['new_image'] = 'upload/foto_ktp/'.$file;
      
      $this->load->library('image_lib', $config);
      $this->image_lib->resize();
    }

    $id_customer = array('id_customer' => $id_customer);
    
    $response = array(
      'data' => $id_customer,
      'stat' => 'true'
    );
    echo json_encode($response);
  
  }
 
}
