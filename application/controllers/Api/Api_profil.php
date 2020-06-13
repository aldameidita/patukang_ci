<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_profil extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('patukang_model');
  }

  function profil(){

    $id_customer = $this->input->post('id_customer');
    
    $data['user'] = $this->db->get_where('tb_customer',['id_customer'=>$id_customer])->result();
    $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$id_customer])->result();
    $data['pesanan'] = $this->patukang_model->sewa_customer($id_customer)->result();
    $data['rating'] = $this->patukang_model->rating($id_customer);
    
    $response = array(
      'data' => $data
    );
    echo json_encode($response);
  }

  function editprofil(){

    $id_customer = $this->input->post('id_customer');
    
        $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$id_customer])->result();
        $data['user'] = $this->db->get_where('tb_customer',['id_customer'=>$id_customer])->result();

    
    $response = array(
      'data' => $data
    );
    echo json_encode($response);
  }


  function update_profil(){

    $nam_leng = $this->input->post('nam_leng');
    $no_telp = $this->input->post('no_telp');
    $alamat = $this->input->post('alamat');
    $email = $this->input->post('email');
   
    $id_customer = $this->input->post('id_customer');

    $cek = $this->db->get_where('tb_customer',['id_customer'=>$id_customer])->row_array();
    if ($cek) {

    $data = array(
      'nam_leng' => $nam_leng,
      'no_telp' => $no_telp,
      'alamat' => $alamat,
      'email' => $email,
    );

    $this->patukang_model->update_profil($id_customer,$data);

    $response = array(
      'data' => $data,
      'stat' => 'true'
    );
    echo json_encode($response);
  

    }else{
        
        $response = array(
        'status' => "false",
        'message' => "Gagal Upload Profil"
      );
      echo json_encode($response);
    }
  
  }

   function update_gambar_profil()
  {

      $id_customer = $this->input->post('id_customer');
      
       if ($this->input->post('foto_diri')!=null) {
      $foto_diri = $this->input->post('foto_diri');
      
      $path = 'upload/foto_cus/';
      $file = uniqid().'.jpg|png|jpeg';
      $file_path = $path.$file;

      file_put_contents($file_path);

      $data = array( 'foto_diri' => $file );
      $data = array( 'id_customer' => $id );
      $this->patukang_model->update_gambare($id_customer,$data);
      
      $config['source_image'] = 'upload/foto_cus/'.$file;
      $config['create_thumb']= FALSE;
      $config['maintain_ratio']= FALSE;
      $config['quality']= '50%';
      $config['new_image'] = 'upload/foto_cus/'.$file;
      
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

 function profil_tukang(){

  $id_customer = $this->input->post('id_customer');

    $data['user'] = $this->db->get_where('tb_customer',['id_customer'=>$id_customer])->result();
        $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$id_customer])->result();
        $data['pesanan'] = $this->patukang_model->sewa_tukang($id_customer)->result();

    $response = array(
      'data' => $data
    );
    echo json_encode($response);
  }

 
}
