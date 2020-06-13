<?php
/**
* 
*/
class patukang_model extends CI_Model
{
	
	function login($user,$pass){
		$this->db->select('*');
		$this->db->from('tb_customer');
		$this->db->where('email',$user);
		$this->db->where('password',$pass);
		$query=$this->db->get();
		return $query;
	}

	function registerAkun1($data,$table){
    $this->db->set('nam_leng',$data['nam_leng']);
    $this->db->set('no_telp',$data['alamat']);
    $this->db->set('alamat',$data['no_telp']);
    $this->db->set('email',$data['email']);
    $this->db->set('password',$data['password']);
    $this->db->set('foto_diri','person_default.jpg');
    $this->db->set('foto_ktp','');
    $this->db->set('status_cus','1');
    $this->db->set('status_tukang','0');
    $this->db->set('pembuatan_data',$data['pembuatan_data']);
    $this->db->insert($table);
    return $this->db->affected_rows();
  }


	function getAll($id_customer){
		$this->db->select('*');
		$this->db->from('tb_customer,tb_tukang');
		$this->db->where('tb_customer.id_customer=tb_tukang.id_customer');
		$this->db->where('tb_customer.id_customer!=',$id_customer);
		$query=$this->db->get();

		return $query;
	}

	function getAllTerendah($id_customer){
		$this->db->select('*');
		$this->db->from('tb_customer,tb_tukang');
		$this->db->where('tb_customer.id_customer!=',$id_customer);
		$this->db->where('tb_customer.id_customer = tb_tukang.id_customer');
		$this->db->order_by('harga_tukang', 'ASC');
		$query=$this->db->get();

		return $query;
	}

	function getAllAlumunium($id_customer){
		$this->db->select('*');
		$this->db->from('tb_customer,tb_tukang');
		$this->db->where('tb_tukang.Keahlian = "Tukang Alumunium" AND tb_customer.id_customer=tb_tukang.id_customer');
		$this->db->where('tb_customer.id_customer!=',$id_customer);
		$query=$this->db->get();

		return $query;
	}

	function getAllKeramik($id_customer){
		$this->db->select('*');
		$this->db->from('tb_customer,tb_tukang');
		$this->db->where('tb_tukang.Keahlian = "Tukang Keramik" AND tb_customer.id_customer=tb_tukang.id_customer');
		$this->db->where('tb_customer.id_customer!=',$id_customer);
		$query=$this->db->get();

		return $query;
	}

	function getAllAtap($id_customer){
		$this->db->select('*');
		$this->db->from('tb_customer,tb_tukang');
		$this->db->where('tb_tukang.Keahlian = "Tukang Atap" AND tb_customer.id_customer=tb_tukang.id_customer');
		$this->db->where('tb_customer.id_customer!=',$id_customer);
		$query=$this->db->get();

		return $query;
	}

	function getAllCat($id_customer){
		$this->db->select('*');
		$this->db->from('tb_customer,tb_tukang');
		$this->db->where('tb_tukang.Keahlian = "Tukang Cat" AND tb_customer.id_customer=tb_tukang.id_customer');
		$this->db->where('tb_customer.id_customer!=',$id_customer);
		$query=$this->db->get();

		return $query;
	}


	function getdetailtukang($id_tukang){
		$this->db->select('*');
		$this->db->from('tb_customer,tb_tukang');
		$this->db->where('tb_tukang.id_tukang',$id_tukang);
		$this->db->where('tb_customer.id_customer=tb_tukang.id_customer');
		$query=$this->db->get();

		return $query;
	}

	function sewa_customer($id_customer){
		$this->db->select('*');
		$this->db->from('tb_sewa,tb_customer,tb_tukang');
		$this->db->where('tb_sewa.id_customer',$id_customer);
		$this->db->where('tb_sewa.id_tukang = tb_tukang.id_tukang');
		$this->db->where('tb_tukang.id_customer=tb_customer.id_customer');
		$query=$this->db->get();

		return $query;
	}

	function sewa_tukang($id_customer){
		$this->db->select('*');
		$this->db->from('tb_tukang');
		$this->db->where('id_customer',$id_customer);
		
		$a=$this->db->get()->row('id_tukang');
		
		$this->db->select('*');
		$this->db->from('tb_sewa,tb_customer');
		$this->db->where('tb_sewa.id_tukang',$a);
		$this->db->where('tb_sewa.id_customer = tb_customer.id_customer');
		
		$query = $this->db->get();

		return $query;
	}

	function update_profil($id_customer,$data){
		$this->db->where('id_customer',$id_customer);
		$this->db->update('tb_customer',$data);
	}

	function sewa($data){
		$this->db->insert('tb_sewa',$data);
	}

	function update_gambar($id_customer,$data){
		$this->db->where('id_customer',$id_customer);
		$berhasil = $this->db->update('tb_customer',$data);
	}

	function update_status_bayar($id_sewa,$data1){
		$this->db->where('id_sewa',$id_sewa);
		$berhasil = $this->db->update('tb_sewa',$data1);
	}

	function update_status_rating($id_sewa,$data1){
		$this->db->where('id_sewa',$id_sewa);
		$berhasil = $this->db->update('tb_sewa',$data1);
	}

	function terima_pesanan($data,$id_sewa){
		$this->db->where('id_sewa',$id_sewa);
		$this->db->update('tb_sewa',$data);
	}

	function tolak_pesanan($data,$id_sewa){
		$this->db->where('id_sewa',$id_sewa);
		$this->db->update('tb_sewa',$data);
	}

	function detail_sewa_tuk($id_sewa){
		$this->db->select('*');
		$this->db->from('tb_sewa');
		$this->db->where('id_sewa',$id_sewa);

		$a=$this->db->get()->row('id_customer');

		$this->db->select('*');
		$this->db->from('tb_customer');
		$this->db->where('id_customer',$a);
		
		$query=$this->db->get();

		return $query;
	}

	function rating($id_customer){
		$this->db->select('*');
		$this->db->from('tb_tukang');
		$this->db->where('id_customer',$id_customer);

		$a=$this->db->get()->row('id_tukang');

		$this->db->select('*');
		$this->db->from('tb_rating');
		$this->db->where('id_tukang',$a);

		$b=$this->db->get()->num_rows('id_tukang');

		if ($b) {

			$this->db->select('sum(rating) as jum_rating');
			$this->db->GROUP_BY('id_tukang',$b);
			$this->db->from('tb_rating');
			
			$c=$this->db->get()->row('jum_rating');


			$d = $c/$b;

			return 	$d;	
		}else{
			return 0;
		}
	}

	function rating_tukang($id_tukang){

		$this->db->select('*');
		$this->db->from('tb_rating');
		$this->db->where('id_tukang',$id_tukang);

		$b=$this->db->get()->num_rows('id_tukang');

		if ($b) {

			$this->db->select('sum(rating) as jum_rating');
			$this->db->GROUP_BY('id_tukang',$b);
			$this->db->from('tb_rating');
			
			$c=$this->db->get()->row('jum_rating');


			$d = $c/$b;

			return 	$d;	
		}else{
			return 0;
		}
	}

	public function get_product_keyword($keyword,$id_customer){
			$this->db->select('*');
			$this->db->from('tb_customer');
			$this->db->like('nam_leng',$keyword);

			$a=$this->db->get()->row('id_customer');

			$this->db->select('*');
			$this->db->from('tb_customer,tb_tukang');
			$this->db->where('tb_customer.id_customer=tb_tukang.id_customer');
			$this->db->where('tb_customer.id_customer',$a);

			$this->db->where('tb_customer.id_customer!=',$id_customer);

			return $this->db->get()->result();
		}

}
?>