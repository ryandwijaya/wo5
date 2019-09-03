<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PembelianModel extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function lihat_pembelian(){
		$this->db->select('*');
		$this->db->from('tb_pembelian');
		$this->db->join('tb_pelanggan','tb_pelanggan.pelanggan_id = tb_pembelian.pembelian_pelanggan');
		$this->db->join('tb_paket','tb_paket.paket_id = tb_pembelian.pembelian_paket');
		$this->db->order_by('pembelian_tgl','DESC');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function lihat_pembelian_tgl($tgl_dari,$tgl_sampai){
		$this->db->select('*');
		$this->db->from('tb_pembelian');
		$this->db->join('tb_pelanggan','tb_pelanggan.pelanggan_id = tb_pembelian.pembelian_pelanggan');
		$this->db->join('tb_paket','tb_paket.paket_id = tb_pembelian.pembelian_paket');
		$this->db->where("tb_pembelian.pembelian_tgl BETWEEN '$tgl_dari' AND '$tgl_sampai'");
		$this->db->order_by('pembelian_tgl','DESC');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function cek_pembelian($produk){
		$this->db->select('*');
		$this->db->from('tb_pembelian');
		$this->db->where('pembelian_paket',$produk);
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function cek_pembelian_tgl($paket){
		$this->db->select('*');
		$this->db->from('tb_pembelian');
		$this->db->where('pembelian_paket',$paket);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function cek_pembayaran($id){
		$this->db->select('*');
		$this->db->from('tb_pembayaran');
		$this->db->where('pembayaran_pembelian',$id);
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function get_pembelian($pelanngan){
		$this->db->select('*');
		$this->db->from('tb_pembelian');
		$this->db->join('tb_pelanggan','tb_pelanggan.pelanggan_id = tb_pembelian.pembelian_pelanggan');
		$this->db->join('tb_paket','tb_paket.paket_id = tb_pembelian.pembelian_paket');
		$this->db->where('pembelian_paket',$pelanngan);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function cek_petugas($id){
		$this->db->select('*');
		$this->db->from('tb_tugas');
		$this->db->join('tb_petugas','tb_petugas.petugas_id = tb_tugas.tugas_petugas');
		$this->db->where('tugas_pembelian',$id);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function lihat_by_id($id){
		$this->db->select('*');
		$this->db->from('tb_pembelian');
		$this->db->join('tb_pelanggan','tb_pelanggan.pelanggan_id = tb_pembelian.pembelian_pelanggan');
		$this->db->join('tb_paket','tb_paket.paket_id = tb_pembelian.pembelian_paket');
		$this->db->where('pembelian_id',$id);
		$query = $this->db->get();
		return $query->row_array();
	}
	public function lihat_by_pelanggan($id){
		$this->db->select('*');
		$this->db->from('tb_pembelian');
		$this->db->join('tb_pelanggan','tb_pelanggan.pelanggan_id = tb_pembelian.pembelian_pelanggan');
		$this->db->join('tb_paket','tb_paket.paket_id = tb_pembelian.pembelian_paket');
		$this->db->where('pembelian_pelanggan',$id);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function lihat_by_vendor($id){
		$this->db->select('*');
		$this->db->from('tb_pembelian');
		$this->db->join('tb_pelanggan','tb_pelanggan.pelanggan_id = tb_pembelian.pembelian_pelanggan');
		$this->db->join('tb_paket','tb_paket.paket_id = tb_pembelian.pembelian_paket');
		$this->db->where('tb_paket.paket_dari',$id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function lihat_pembelian_by_kategori($kategori){
		$this->db->select('*');
		$this->db->from('tb_pembelian');
		$this->db->join('tb_kategori','tb_kategori.kategori_id = tb_pembelian.pembelian_kategori');
		$this->db->where('tb_pembelian.pembelian_kategori',$kategori);
		$this->db->order_by('pembelian_date_created','DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function tambah_pembelian($data){
		$this->db->insert('tb_pembelian', $data);
		return $this->db->affected_rows();
	}

	public function lihat_satu_pembelian($id){
		$this->db->select('*');
		$this->db->from('tb_pembelian');
		$this->db->join('tb_kategori','tb_kategori.kategori_id = tb_pembelian.pembelian_kategori');
		$this->db->where('tb_pembelian.pembelian_id',$id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function getLaporanHarian($hari,$bulan,$tahun,$vendor){
		$this->db->select('*');
		$this->db->from('tb_pembelian');
		$this->db->join('tb_pelanggan','tb_pelanggan.pelanggan_id = tb_pembelian.pembelian_pelanggan');
		$this->db->join('tb_paket','tb_paket.paket_id = tb_pembelian.pembelian_paket');
    	$this->db->where('DAY(pembelian_tgl)',$hari);
    	$this->db->where('MONTH(pembelian_tgl)',$bulan);
    	$this->db->where('YEAR(pembelian_tgl)',$tahun);
    	$this->db->where('tb_paket.paket_dari',$vendor);
    	return $this->db->get()->result_array();
    }
    public function getLaporanBulanan($bulan,$tahun,$vendor){
		$this->db->select('*');
		$this->db->from('tb_pembelian');
		$this->db->join('tb_pelanggan','tb_pelanggan.pelanggan_id = tb_pembelian.pembelian_pelanggan');
		$this->db->join('tb_paket','tb_paket.paket_id = tb_pembelian.pembelian_paket');
    	$this->db->where('MONTH(pembelian_tgl)',$bulan);
    	$this->db->where('YEAR(pembelian_tgl)',$tahun);
    	$this->db->where('tb_paket.paket_dari',$vendor);
    	return $this->db->get()->result_array();
    }
     public function getLaporanTahunan($tahun,$vendor){
		$this->db->select('*');
		$this->db->from('tb_pembelian');
		$this->db->join('tb_pelanggan','tb_pelanggan.pelanggan_id = tb_pembelian.pembelian_pelanggan');
		$this->db->join('tb_paket','tb_paket.paket_id = tb_pembelian.pembelian_paket');
    	$this->db->where('YEAR(pembelian_tgl)',$tahun);
    	$this->db->where('tb_paket.paket_dari',$vendor);
    	return $this->db->get()->result_array();
    }

	public function update_pembelian($id,$data){
		$this->db->where('pembelian_id',$id);
		$this->db->update('tb_pembelian',$data);
		return $this->db->affected_rows();
	}

	public function hapus_pembelian($id){
		$this->db->where('pembelian_id', $id);
		$this->db->delete('tb_pembelian');
		return $this->db->affected_rows();
	}
}
