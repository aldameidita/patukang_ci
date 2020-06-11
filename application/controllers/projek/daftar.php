<?php
class daftar extends CI_Controller{
 
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('patukang_model');
    }
     
    public function index(){
        
        if (isset($_POST['submit'])==1){

       
        $this->form_validation->set_rules('email','Email','trim|valid_email|is_unique[tb_customer.email]',[
            'is_unique'=>'&nbsp;&nbsp; *Email Sudah Terdaftar'
        ]);
       
        $this->form_validation->set_rules('password','Password','trim|matches[re_password]');
        $this->form_validation->set_rules('re_password','Password','trim|matches[password]',[
            'matches'=> '&nbsp; *Password yang dimasukkan tidak sama. <br> &nbsp;&nbsp;Silahkan coba lagi'
        ]);


        if($this->form_validation->run() == false){
             $this->session->set_flashdata('message','<div class="alert alert-danger" style="font-size:12px" role="alert"> Pendaftaran Gagal. Silahkan Coba Lagi ! </div>');
             $this->load->view('projek/indeks');
        }else{
            $data = [

                'nam_leng' => htmlspecialchars($this->input->post('nam_leng',true)),
                'no_telp' => htmlspecialchars($this->input->post('no_telp',true)),
                'alamat' => htmlspecialchars($this->input->post('alamat',true)),
                'email' => htmlspecialchars($this->input->post('email',true)),
                'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
                'foto_diri' => 'person_default.jpg',
                'status_cus' => '1',
                'status_tukang' => '0',
                'pembuatan_data' => time()
            ];
            $this->db->insert('tb_customer',$data);
            $this->session->set_flashdata('message','<div class="alert alert-success" style="font-size:12px" role="alert"> Pendaftaran Sukses. Silahkan Login ! </div>');
            redirect('projek/patukang');
        }
      }else{
         $this->load->view('projek/indeks');
      }
    }
}
?>