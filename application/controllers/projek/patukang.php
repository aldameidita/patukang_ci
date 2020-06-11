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
    public function profil (){

       if ($this->session->userdata('status')) {   

        $id_customer = $this->session->userdata['id_customer'];
        
        $data['user'] = $this->db->get_where('tb_customer',['email'=>$this->session->userdata('email')])->result();
        $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$this->session->userdata('id_customer')])->result();

         $this->template->views('projek/profil', $data);

        }else{
        redirect('projek/patukang');
     }
    }
/*--------------------------------------------------------------------*/
     public function editprofil (){

       if ($this->session->userdata('status')) {   

        $id_customer = $this->session->userdata['id_customer'];
        
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

    $this->patukang_model->update_profil($data,'tb_customer');
    redirect('projek/patukang/profil');
    
    }else{
      $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:12px" role="alert">Password Salah</div>');
      redirect('projek/patukang/editprofil');
    }
      
    }else{
        redirect('projek/patukang');
     }
  }

   public function update_gambar_profil(){
    if ($this->session->userdata('status')) {
       $id_customer = $this->input->post('id_customer');
    $cek = $this->db->get_where('tb_customer',['id_customer'=>$id_customer])->row_array();
    if ($cek) {

    $foto = $_FILES['foto_diri'];
    
    if($foto=''){}else{   

    $config['upload_path'] = './assets/foto_ktp/';
    $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
    $config['max_size'] = '5000'; // kb;

    $this->load->library('upload',$config);
    if (!$this->load->library('upload',$config)) {
      $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:12px" role="alert">Gambar Gagal di Ubah</div>');
      redirect('projek/patukang/editprofil');
    }else{
      $foto = $this->upload->data('file_name');
    

      $data = array(
        'foto_diri' => $foto
      );

      $this->patukang_model->update_gambar_profil($data,'tb_customer');
      redirect('projek/patukang/profil');
    }
    } 
    }else{
        redirect('projek/patukang');
     }
  }
  }
  
  

    public function profil_tukang (){

       if ($this->session->userdata('status')) {   

        $data['user'] = $this->db->get_where('tb_customer',['email'=>$this->session->userdata('email')])->result();
        $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$this->session->userdata('id_customer')])->result();

         $this->template->views('projek/profil_tukang', $data);

        }else{
        redirect('projek/patukang');
     }
    }
    
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

     public function sewatukang (){

        if ($this->session->userdata('status')) { 
        if (isset($_POST['booking'])){

         $id_tukang = $this->input->post('id_tukang');
         
         $data['user'] = $this->db->get_where('tb_customer',['email'=>$this->session->userdata('email')])->result();
         $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$this->session->userdata('id_customer')])->result();
         $data['detail_tukang'] = $this->patukang_model->getdetailtukang($id_tukang)->result();

         $this->template->views('projek/sewa-tukang',$data);
        
        }else{
        
        $data['user'] = $this->db->get_where('tb_customer',['email'=>$this->session->userdata('email')])->result();
        $data['user_tukang'] =  $this->db->get_where('tb_tukang',['tb_tukang.id_customer'=>$this->session->userdata('id_customer')])->result();     
        redirect('projek/patukang/beranda');
        
        }
        }
        else{
         redirect('projek/patukang');
     }
    }


   function tampil()
{
    $nama = $this->input->post('kirimNama');
    $data['hasil_semua']=$this->patukang_model->tampil_dosen_semua($nama);
    $data['hasil_limit']=$this->patukang_model->tampil_dosen_limit($nama);
    if($nama!="")
    {
        echo '<ul>';
            foreach($data['hasil_limit']->result() as $result)
            {
                echo '<li onClick="pilih(\''.$result->nam_leng.'\');">
                <b>'.$result->nam_leng.'</b></li>';
            }
            echo '<p id="total">
            Terdapat </p>';
        echo '</ul>';
    }
    else
    {
        echo "error";
    }
}

function detail()
{
    $nama = $this->uri->segment(3);
    $data['hasil_semua']=$this->patukang_model->tampil_dosen_semua($nama);
    echo '<ul>';
    foreach($data['hasil_semua']->result() as $result)
        {
                echo '<li onClick="pilih(\''.$result->nam_leng.'\');">
            <b>'.$result->nam_leng.'</b> </li>';
        }
    echo '</ul>';
}
    
     public function logout (){

        $this->session->unset_userdata('id_customer');
        $this->session->unset_userdata('nam_leng');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('status_tukang');
        $this->session->unset_userdata('status');

        $this->session->set_flashdata('message','<div class="alert alert-success" style="font-size:12px;" role="alert">Anda berhasil Logout</div>');
        redirect('projek/patukang');
    }
}
?>