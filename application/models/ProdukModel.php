<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukModel extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function lihat_paket(){
		$this->db->select('*');
		$this->db->from('tb_paket');
		$this->db->join('tb_kategori','tb_kategori.kategori_id = tb_paket.paket_kategori');
		$this->db->order_by('paket_date_created','DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function lihat_paket_by_kategori($kategori){
		$this->db->select('*');
		$this->db->from('tb_paket');
		$this->db->join('tb_kategori','tb_kategori.kategori_id = tb_paket.paket_kategori');
		$this->db->where('tb_paket.paket_kategori',$kategori);
		$this->db->order_by('paket_date_created','DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	

	

	public function update_paket($id,$data){
		$this->db->where('paket_id',$id);
		$this->db->update('tb_paket',$data);
		return $this->db->affected_rows();
	}

	public function hapus_paket($id){
		$this->db->where('paket_id', $id);
		$this->db->delete('tb_paket');
		return $this->db->affected_rows();
	}
}
