<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PaketModel extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function lihat_paket(){
		$this->db->select('*');
		$this->db->from('tb_paket');
		$this->db->join('tb_vendor','tb_vendor.vendor_id = tb_paket.paket_dari');
		$this->db->order_by('paket_date_created','DESC');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function lihat_paket_vendor($id){
		$this->db->select('*');
		$this->db->from('tb_paket');
		$this->db->join('tb_vendor','tb_vendor.vendor_id = tb_paket.paket_dari');
		$this->db->where('tb_paket.paket_dari',$id);
		$this->db->order_by('paket_date_created','DESC');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function lihat_satu_paket($id){
		$this->db->select('*');
		$this->db->from('tb_paket');
		$this->db->join('tb_vendor','tb_vendor.vendor_id = tb_paket.paket_dari');
		$this->db->where('tb_paket.paket_id',$id);
		$query = $this->db->get();
		return $query->row_array();
	}
	public function tambah_paket($data){
		$this->db->insert('tb_paket', $data);
		return $this->db->affected_rows();
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
