<?php
/**
* 
*/
class patukang_model extends CI_Model
{
	
	function login($user,$pass,$table){
		$this->db->select('*');
		$this->db->from('tb_customer');
		$this->db->where('email',$user);
		$this->db->where('password',$pass);
		$query=$this->db->get();
		return $query;
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

	function update_profil($data,$table){
		$this->db->update($table,$data);
	}

	function update_gambar_profil($data,$table){
		$this->db->update($table,$data);
	}

	function tampil_dosen_semua($nama){
    $q = $this->db->query("select * from tb_customer.nam_leng like '%$nama%'");
    return $q;
	}
	
	function tampil_dosen_limit($nama){
    $q = $this->db->query("select * from tb_customer.nam_leng like '%$nama%' LIMIT 8");
    return $q;
	}
}
?>