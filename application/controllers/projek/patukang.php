<?php

class patukang extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('patukang_model');
        $this->load->library('template');
	}
	/*--------------------------------------------------------------------*/
	public function index (){
       
       if (!$this->session->userdata('status')) {   
      	$this->load->view('projek/indeks');
        }else{
        redirect('projek/patukang/beranda');
        }

  	}
/*--------------------------------------------------------------------*/
  	public function beranda (){

        if ($this->session->userdata('status')) {   

        $id_customer = $this->session->userdata['id_customer'];
        
        $data['user'] = $this->db->get_where('tb_customer',['email'=>$this->session->userdata('email')])->result();  
        $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$this->session->userdata('id_customer')])->result();

  		$data['terendah'] = $this->patukang_model->getAllTerendah($id_customer)->result();
    	$data['alumunium'] = $this->patukang_model->getAllAlumunium($id_customer)->result();
    	$data['keramik'] = $this->patukang_model->getAllKeramik($id_customer)->result();
    	$data['atap'] = $this->patukang_model->getAllAtap($id_customer)->result();
    	$data['cat'] = $this->patukang_model->getAllCat($id_customer)->result();
    	$data['all'] = $this->patukang_model->getAll($id_customer)->result();

    	$this->template->views('projek/beranda', $data);
  	     }
         else{
            redirect('projek/patukang');
        }
    }
/*--------------------------------------------------------------------*/
    
public function berandaTerendah (){

        if ($this->session->userdata('status')) {   

        $id_customer = $this->session->userdata['id_customer'];
        
        $data['user'] = $this->db->get_where('tb_customer',['email'=>$this->session->userdata('email')])->result();  
        $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$this->session->userdata('id_customer')])->result();

      $data['terendah'] = $this->patukang_model->getAllTerendah($id_customer)->result();

      $this->template->views('projek/beranda_terendah', $data);
         }
         else{
            redirect('projek/patukang');
        }
    }

/*--------------------------------------------------------------------*/

/*--------------------------------------------------------------------*/
    
public function berandaAlumunium (){

        if ($this->session->userdata('status')) {   

        $id_customer = $this->session->userdata['id_customer'];
        
        $data['user'] = $this->db->get_where('tb_customer',['email'=>$this->session->userdata('email')])->result();  
        $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$this->session->userdata('id_customer')])->result();

      $data['alumunium'] = $this->patukang_model->getAllAlumunium($id_customer)->result();
     
      $this->template->views('projek/beranda_alu', $data);
         }
         else{
            redirect('projek/patukang');
        }
    }

/*--------------------------------------------------------------------*/


/*--------------------------------------------------------------------*/
    
public function berandaKeramik (){

        if ($this->session->userdata('status')) {   

        $id_customer = $this->session->userdata['id_customer'];
        
        $data['user'] = $this->db->get_where('tb_customer',['email'=>$this->session->userdata('email')])->result();  
        $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$this->session->userdata('id_customer')])->result();

     $data['keramik'] = $this->patukang_model->getAllKeramik($id_customer)->result();
     
      $this->template->views('projek/beranda_keramik', $data);
         }
         else{
            redirect('projek/patukang');
        }
    }

/*--------------------------------------------------------------------*/


/*--------------------------------------------------------------------*/
    
public function berandaCat (){

        if ($this->session->userdata('status')) {   

        $id_customer = $this->session->userdata['id_customer'];
        
        $data['user'] = $this->db->get_where('tb_customer',['email'=>$this->session->userdata('email')])->result();  
        $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$this->session->userdata('id_customer')])->result();

     $data['cat'] = $this->patukang_model->getAllCat($id_customer)->result();
     
      $this->template->views('projek/beranda_cat', $data);
         }
         else{
            redirect('projek/patukang');
        }
    }

/*--------------------------------------------------------------------*/
/*--------------------------------------------------------------------*/
    
public function berandaAtap (){

        if ($this->session->userdata('status')) {   

        $id_customer = $this->session->userdata['id_customer'];
        
        $data['user'] = $this->db->get_where('tb_customer',['email'=>$this->session->userdata('email')])->result();  
        $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$this->session->userdata('id_customer')])->result();

     $data['atap'] = $this->patukang_model->getAllAtap($id_customer)->result();
     
      $this->template->views('projek/beranda_atap', $data);
         }
         else{
            redirect('projek/patukang');
        }
    }

/*--------------------------------------------------------------------*/


    public function profil (){

       if ($this->session->userdata('status')) {   

        $id_customer = $this->session->userdata['id_customer'];
        
        $data['user'] = $this->db->get_where('tb_customer',['email'=>$this->session->userdata('email')])->result();
        $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$this->session->userdata('id_customer')])->result();
        $data['pesanan'] = $this->patukang_model->sewa_customer($id_customer)->result();
        $data['rating'] = $this->patukang_model->rating($id_customer);
         
         $this->template->views('projek/profil', $data);

        }else{
        redirect('projek/patukang');
     }
    }
/*--------------------------------------------------------------------*/
     public function editprofil (){

       if ($this->session->userdata('status')) {   

        $id_customer = $this->session->userdata['id_customer'];

        $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$this->session->userdata('id_customer')])->result();
        $data['user'] = $this->db->get_where('tb_customer',['id_customer'=>$this->session->userdata('id_customer')])->result();

         $this->template->views('projek/edit_profil', $data);

        }else{
        redirect('projek/patukang');
     }
    }
    
/*--------------------------------------------------------------------*/

   public function update_profil(){
    if ($this->session->userdata('status')) {

    $id_customer = $this->input->post('id_customer');
    $nam_leng = $this->input->post('nam_leng');
    $alamat = $this->input->post('alamat');
    $email = $this->input->post('email');
    $no_telp = $this->input->post('no_telp');
    
    $cek = $this->db->get_where('tb_customer',['id_customer'=>$id_customer])->row_array();
    if ($cek) {

    $data = array(
        'nam_leng' => $nam_leng,
        'no_telp' => $no_telp,
        'alamat' => $alamat,
        'email' => $email
    );

    $this->patukang_model->update_profil($id_customer,$data);
    redirect('projek/patukang/profil');
    
    }else{
      $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:12px" role="alert">Password Salah</div>');
      redirect('projek/patukang/editprofil');
    }
      
    }else{
        redirect('projek/patukang');
     }
  }

  /*--------------------------------------------------------------------*/

    public function profil_tukang (){

       if ($this->session->userdata('status')) {   

        $data['user'] = $this->db->get_where('tb_customer',['email'=>$this->session->userdata('email')])->result();
        $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$this->session->userdata('id_customer')])->result();
        
        $id_customer = $this->session->userdata['id_customer'];
        $data['pesanan'] = $this->patukang_model->sewa_tukang($id_customer)->result();

         $this->template->views('projek/profil_tukang', $data);

        }else{
        redirect('projek/patukang');
     }
    }

    /*--------------------------------------------------------------------*/
    
    public function daftar_tukang (){

       if ($this->session->userdata('status')) { 

        $cek = $this->db->get_where('tb_customer',['email'=>$this->session->userdata('email')])->result();
        
        foreach ($cek as $baris) {
       
            if ($baris->status_tukang == 1) {

            $data['user'] = $this->db->get_where('tb_customer',['email'=>$this->session->userdata('email')])->result();
            $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$this->session->userdata('id_customer')])->result();

            $this->template->views('projek/daftartukang-dalamproses',$data);
            }else{

            $id_customer = $this->session->userdata['id_customer'];        
            $data['user'] = $this->db->get_where('tb_customer',['email'=>$this->session->userdata('email')])->result();
            $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$this->session->userdata('id_customer')])->result();

            $this->template->views('projek/daftartukang',$data);
            
            }
        }
       }else{
        redirect('projek/patukang');
     }
    }

    /*--------------------------------------------------------------------*/
    
    public function regristasi_tukang (){

       if ($this->session->userdata('status')) { 

         $data['user'] = $this->db->get_where('tb_customer',['email'=>$this->session->userdata('email')])->result();
         $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$this->session->userdata('id_customer')])->result();
         $data = [

                'Keahlian' => htmlspecialchars($this->input->post('nam_leng',true)),
                'harga_tukang' => htmlspecialchars($this->input->post('no_telp',true)),
                'no_rekening' => htmlspecialchars($this->input->post('alamat',true)),
                'foto_ktp' => htmlspecialchars($this->input->post('alamat',true)),
            ];
         
            $this->db->insert('tb_customer',$data);
            $this->session->set_flashdata('message','<div class="alert alert-success" style="font-size:12px" role="alert"> Pendaftaran Sukses. Silahkan Login ! </div>');
            redirect('projek/patukang/beranda');
        }else{
        redirect('projek/patukang');
     }
    }

    /*--------------------------------------------------------------------*/

     public function sewatukang (){

        if ($this->session->userdata('status')) { 
       
          $id_tukang = $this->input->post('id_tukang');
         
         $data['user'] = $this->db->get_where('tb_customer',['email'=>$this->session->userdata('email')])->result();
         
         $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$this->session->userdata('id_customer')])->result();
         $data['detail_tukang'] = $this->patukang_model->getdetailtukang($id_tukang)->result();
         $data['rating'] = $this->patukang_model->rating_tukang($id_tukang);

         $this->template->views('projek/sewa-tukang',$data);
        
        }
        else{
         redirect('projek/patukang');
     }
    }

/*--------------------------------------------------------------------*/
 
  public function search(){
      $keyword = $this->input->post('keyword');
      $id_customer = $this->session->userdata['id_customer'];
        
      $data['user'] = $this->db->get_where('tb_customer',['email'=>$this->session->userdata('email')])->result();  
      $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$this->session->userdata('id_customer')])->result();
      
      $data['products']=$this->patukang_model->get_product_keyword($keyword,$id_customer);
      
      $this->template->views('projek/search',$data);
    }
    /*--------------------------------------------------------------------*/

     public function logout (){

        $this->session->unset_userdata('id_customer');
        $this->session->unset_userdata('nam_leng');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('status_tukang');
        $this->session->unset_userdata('status');

        $this->session->set_flashdata('message','<div class="alert alert-success" style="font-size:12px;" role="alert">Anda berhasil Logout</div>');
        redirect('projek/patukang');
    }

/*--------------------------------------------------------------------*/

    public function update_gambar_profil()
  {

      $id_customer = $this->input->post('id_customer');

      if (!empty($_FILES['foto_diri']['name'])) {
      $upload = $this->_do_upload();
      $data['foto_diri'] = $upload;
    }
            $this->patukang_model->update_gambar($id_customer,$data);
            
            redirect('projek/patukang/profil',$data);
    }
    
      private function _do_upload()
  {

    $config['upload_path']    = 'upload/foto_cus/';
    $config['allowed_types']  = 'gif|jpg|png|jpeg';
    $config['max_size']       = 1024;
    $config['file_name']      = round(microtime(true)*1000);
 
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('foto_diri')) {
      $this->session->set_flashdata('message', $this->upload->display_errors('',''));
      redirect('projek/patukang/editprofil');
    }
    return $this->upload->data('file_name');
  }

/*--------------------------------------------------------------------*/

   public function regis_tukang()
  {
      $id_customer = $this->input->post('id_customer');
      $Keahlian = $this->input->post('Keahlian');
      $harga_tukang = $this->input->post('harga_tukang');
      $no_rek = $this->input->post('no_rek');
      $status_tukang = $this->input->post('status_tukang');

      $data_tukang = array(
      'id_customer' => $id_customer,
      'Keahlian' => $Keahlian,
      'harga_tukang' => $harga_tukang,
      'no_rek' => $no_rek
      );

      if (!empty($_FILES['foto_ktp']['name'])) {
      $upload = $this->_do_upload2();
      $data_customer['foto_ktp'] = $upload;
      $data_customer['status_tukang'] = $status_tukang;
      }
    
    $this->db->insert('tb_tukang',$data_tukang);

    $this->patukang_model->update_gambar($id_customer,$data_customer);
            
    redirect('projek/patukang/profil');
    }
    
      private function _do_upload2()
  {
    $config['upload_path']    = 'upload/foto_ktp/';
    $config['allowed_types']  = 'gif|jpg|png|jpeg';
    $config['max_size']       = 2048;
    $config['max_widht']      = 1000;
    $config['max_height']     = 1000;
    $config['file_name']      = round(microtime(true)*1000);
 
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('foto_ktp')) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" style="font-size:12px" role="alert">Gambar Tidak Sesuai</div>');
      redirect('projek/patukang/daftar_tukang');
    }
    return $this->upload->data('file_name');
  }

/*--------------------------------------------------------------------*/

   public function cek(){

      $id_customer = $this->input->post('id_customer');
      $id_tukang = $this->input->post('id_tukang');
      $alamat_sewa = $this->input->post('alamat_sewa');
      $luas_sewa = $this->input->post('luas_sewa');
      $detail_sewa = $this->input->post('detail_sewa');
      $total_sewa = $this->input->post('total_sewa');
      $tgl_sewa = $this->input->post('tgl_sewa');
      $cek_tgl = $this->input->post('tgl_now');

      if ($cek_tgl>$tgl_sewa) {
         $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:20px;" role="alert">Pesanan Gagal Karena Tanggal Tidak Valid</div>');
        redirect('projek/patukang/beranda');
      
      }else{

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

       $q = $this->patukang_model->sewa($data);
       redirect('projek/patukang/profil');
       
         $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:12px;" role="alert">Anda Gagal Memesan</div>');
        redirect('projek/patukang/beranda');
    }
   }
/*--------------------------------------------------------------------*/

    public function terima_pesanan(){
    
    $id_sewa = $this->uri->segment(4);
    
    $data = array(
      'status_sewa' => '1'
    );
    
    $cek = $this->patukang_model->terima_pesanan($data,$id_sewa);
    if ($cek) {
      redirect('projek/patukang/profil_tukang');
    }else{
      $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:12px;" role="alert">Terima Pesanan Gagal</div>');
      redirect('projek/patukang/profil_tukang'); 
    }
  }

/*--------------------------------------------------------------------*/

  public function tolak_pesanan(){
    
    $id_sewa = $this->uri->segment(4);
    
    $data = array(
      'status_sewa' => '2'
    );
    
    $cek = $this->patukang_model->tolak_pesanan($data,$id_sewa);
    if ($cek) {
      redirect('projek/patukang/profil_tukang');
    }else{
      $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:12px;" role="alert">Terima Pesanan Gagal</div>');
      redirect('projek/patukang/profil_tukang'); 
    }
  }

/*--------------------------------------------------------------------*/

  public function detail_sewa_cus(){
    
      $id_sewa = $this->input->post('id_sewa');
      
      $data['user'] = $this->db->get_where('tb_customer',['email'=>$this->session->userdata('email')])->result();
      $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$this->session->userdata('id_customer')])->result();
      $data['detail'] =  $this->db->get_where('tb_sewa',['id_sewa'=>$id_sewa])->result();
      
      if ($data) {
       $this->template->views('projek/detail_sewa_cus', $data);
       }else{
        redirect('projek/patukang/profil'); 
       }
  }

/*--------------------------------------------------------------------*/

  public function detail_sewa_tuk(){
    
      $id_sewa = $this->input->post('id_sewa');
      
      $data['user'] = $this->db->get_where('tb_customer',['email'=>$this->session->userdata('email')])->result();
      $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$this->session->userdata('id_customer')])->result();
      $data['detail'] =  $this->db->get_where('tb_sewa',['id_sewa'=>$id_sewa])->result();
      $data['customer'] = $this->patukang_model->detail_sewa_tuk($id_sewa)->result();
      
      if ($data) {
       $this->template->views('projek/detail_sewa_tuk', $data);
       }else{
        redirect('projek/patukang/profil'); 
       }
  }

  /*--------------------------------------------------------------------*/

  public function bayar_sewa(){
    
      
      $id_sewa = $this->input->post('id_sewa');
      
      $data['user'] = $this->db->get_where('tb_customer',['email'=>$this->session->userdata('email')])->result();
      $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$this->session->userdata('id_customer')])->result();
      $data['detail'] =  $this->db->get_where('tb_sewa',['id_sewa'=>$id_sewa])->result();
      $data['customer'] = $this->patukang_model->detail_sewa_tuk($id_sewa)->result();
      
      if ($data) {
       $this->template->views('projek/bayar_sewa', $data);
       }else{
        redirect('projek/patukang/profil'); 
       }
  }

/*--------------------------------------------------------------------*/

 public function cek_bayar_sewa()
  {
    if (isset($_POST['submit'])) {

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

      if (!empty($_FILES['foto_transaksi']['name'])) {
      $upload = $this->_do_upload3();
      $data['foto_transaksi'] = $upload;
    }

     $data1['status_sewa'] = $status_sewa;
    
    $this->db->insert('tb_pembayaran_cus',$data);

    $this->patukang_model->update_status_bayar($id_sewa,$data1);

    $this->session->set_flashdata('message', '<div class="alert alert-success" style="font-size:20px" role="alert">Pembayaran Sukses</div>');        
    redirect('projek/patukang/profil');
    }else{
      $this->session->set_flashdata('message', '<div class="alert alert-danger" style="font-size:20px" role="alert">Pembayaran Gagal</div>');
      redirect('projek/bayar_sewa');
    }
  }
    
      private function _do_upload3()
  {
    $config['upload_path']    = 'upload/foto_transaksi/';
    $config['allowed_types']  = 'gif|jpg|png|jpeg';
    $config['max_size']       = 2048;
    $config['max_widht']      = 1000;
    $config['max_height']     = 1000;
    $config['file_name']      = round(microtime(true)*1000);
 
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('foto_transaksi')) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" style="font-size:20px" role="alert">Gambar Tidak Sesuai</div>');
      redirect('projek/patukang/bayar_sewa');
    }
    return $this->upload->data('file_name');
  }

/*--------------------------------------------------------------------*/

 public function beri_rating()
  {
    if (isset($_POST['submit'])) {
      
      if (!isset($_POST['rating'])) {
        $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:20px" role="alert"> Rating Harus Diisi ! </div>');
        redirect('projek/patukang/profil');  
      }else{

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
          if ($rating) {

          $this->patukang_model->update_status_rating($id_sewa,$data1);
          
        $this->session->set_flashdata('message','<div class="alert alert-success" style="font-size:20px" role="alert"> Tambah Rating Sukses ! </div>');
        redirect('projek/patukang/profil');

          }else{
        
        $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:20px" role="alert"> Tambah Rating Gagal ! </div>');
        redirect('projek/patukang/profil');
          }  

      }
      }else{
         $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:20px" role="alert"> Tambah Rating Gagal ! </div>');
        redirect('projek/patukang/profil');
      }
  }

/*--------------------------------------------------------------------*/
  public function forgot (){
       
       if (!$this->session->userdata('status')) {   
        $this->load->view('projek/forgot');
        }else{
        redirect('projek/patukang/beranda');
        }

    }

/*--------------------------------------------------------------------*/

  public function forgotPassword ()
  {
    $this->form_validation->set_rules('email','Email','trim|valid_email');

    if ($this->form_validation->run() == false) {
      $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:12px" role="alert"> Email Tidak Valid </div>');
             $this->load->view('projek/indeks');
    }else{

      $email = $this->input->post('email');
      $cek = $this->db->get_where('tb_customer',['email'=>$email])->row_array();
      if ($cek) {

        $token = base64_encode(random_bytes(32));

            $user_token = [
                'email' => $email,
                'token' => $token   
            ];
             
             $this->db->insert('user_token',$user_token);
             $this->_sendEmail($token);
            $this->session->set_flashdata('message','<div class="alert alert-success" style="font-size:12px" role="alert"> Cek Email untuk reset Password </div>');

        $this->load->view('projek/indeks');

      }else{
        $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:12px" role="alert"> Reset Password gagal </div>');
        $this->load->view('projek/indeks');
      }
    }

  }
  /*--------------------------------------------------------------------*/

  private function _sendEmail($token){
        $config = [
            'protocol'      => 'smtp',
            'smtp_host'     => 'smtp.gmail.com',
            'smtp_user'     => 'donialii098@gmail.com',
            'smtp_pass'     => 'Penghianat123',
            'smtp_port'     => 465,
            'mailtype'      => 'html',
            'charset'       => 'utf-8',
            'smtp_crypto'   => 'ssl',            
            'crlf'          => "\r\n",
            'newline'       => "\r\n"
        ];        

        $this->load->library('email', $config);
        $this->email->initialize($config); 
        
        $this->email->from('donialii098@gmail.com', 'Pa-Tukang.com');
        $this->email->to($this->input->post('email'));   

        $this->email->subject('Reset Password Akun Pa-Tukang');
         $messag = 'Klik link berikut untuk mengatur ulang password akun anda <a href="'.base_url().'projek/patukang/resetpassword'.'? email='.$this->input->post('email').'& token='.urlencode($token).'">RESET PASSWORD</a>';
        $this->email->message($messag); 

        if($this->email->send()){
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    /*--------------------------------------------------------------------*/

  public function resetpassword ()
  {
    

      $email = $this->input->get('email');
      $token = $this->input->get('token');

      $cek = $this->db->get_where('tb_customer',['email'=>$email])->row_array();
      if ($cek) {

        $user_token = $this->db->get_where('user_token',['token'=>$token])->row_array();
        
        if ($user_token) {
          $this->session->set_userdata('reset_email',$email);
         $this->changePassword();
        }else{
          $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:12px" role="alert"> Reset Password gagal ! Token Salah </div>');
        $this->load->view('projek/indeks');
        }

      }else{
        $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:12px" role="alert"> Reset Password gagal ! Email tidak valid </div>');
        $this->load->view('projek/indeks');
      }
    }


   public function changePassword ()
  {
      if (!$this->session->userdata('reset_email')) {   
          redirect('projek/patukang');
       }
       else{
        $this->form_validation->set_rules('password1','Password1','trim|matches[password2]');
        $this->form_validation->set_rules('password2','Password2','trim|matches[password1]',[
            'matches'=> '&nbsp; *Password yang dimasukkan tidak sama. <br> &nbsp;&nbsp;Silahkan coba lagi'
        ]);


        if($this->form_validation->run() == false){
             $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:12px" role="alert"> Pendaftaran Gagal. Silahkan Coba Lagi ! </div>');
             $this->load->view('projek/reset_password');
        }else{
          $password1 = password_hash($this->input->post('password1'),PASSWORD_DEFAULT);
          $email = $this->session->userdata('reset_email');

          $this->db->set('password',$password1);
          $this->db->where('email',$email);
          $this->db->update('tb_customer');

          $this->session->unset_userdata('reset_email');
          
           $this->session->set_flashdata('message','<div class="alert alert-success" style="font-size:12px" role="alert">RESET PASSWORD SUKSES ! SILAHKAN LOGIN</div>');
           $this->load->view('projek/indeks'); 
       }
       }

  }

}  
?>  