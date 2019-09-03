<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PetugasModel extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function lihat_petugas_vendor($id){
		$this->db->select('*');
		$this->db->from('tb_petugas');
		$this->db->join('tb_vendor','tb_vendor.vendor_id = tb_petugas.petugas_vendor');
		$this->db->where('petugas_vendor',$id);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function lihat_petugas(){
		$this->db->select('*');
		$this->db->from('tb_petugas');
		$this->db->join('tb_vendor','tb_vendor.vendor_id = tb_petugas.petugas_vendor');
		$query = $this->db->get();
		return $query->result_array();
	}

	
}
