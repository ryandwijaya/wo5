<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PembelianController extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$model = array('CrudModel','PembelianModel','PetugasModel');
		$this->load->model($model);
	}

	public function index(){
		$data = array(
			'title' => 'Data Pembelian | Wedding Organizer',
			'page_title' => 'Data Pembelian',
			'icon_title' => 'fa-money',
			
		);
		if ($this->session->userdata('session_level')=='pelanggan'){

		$data['pembelian'] = $this->PembelianModel->lihat_by_pelanggan($this->session->userdata('session_id'));
		}elseif ($this->session->userdata('session_level')=='vendor') {
		$data['pembelian'] = $this->PembelianModel->lihat_by_vendor($this->session->userdata('session_id'));
		$data['petugas'] = $this->PetugasModel->lihat_petugas_vendor($this->session->userdata('session_id'));
		}else{

		$data['pembelian'] = $this->PembelianModel->lihat_pembelian();
		}
					
		
		$this->load->view('backend/templates/header',$data);
		$this->load->view('backend/pembelian/index',$data);
		$this->load->view('backend/templates/footer');
	}

	public function lihat($id){
		$data = array(
			'title' => 'Data Pembelian | Wedding Organizer',
			'page_title' => 'Detail Pembelian',
			'icon_title' => 'fa-product-hunt',
			'pembelian' => $this->PembelianModel->lihat_by_id($id)
		);
		$this->load->view('backend/templates/header',$data);
		$this->load->view('backend/pembelian/lihat',$data);
		$this->load->view('backend/templates/footer');


	}
	public function add_petugas($id){
		
		if (isset($_POST['pilih'])) {
			for ($i = 1; $i <5 ; $i++) {
			$petugas[$i] = [
			    'tugas_petugas' => $this->input->post('petugas'.$i), 
			    'tugas_pembelian' => $id, 
			];
			$this->CrudModel->insert('tb_tugas',$petugas[$i]);
			}
			$this->session->set_flashdata('alert', 'success_post');
			redirect(base_url('admin/pembelian'));
		}else{
			$data = array(
			'title' => 'Tambah Petugas | Wedding Organizer',
			'page_title' => 'Tambah Petugas',
			'icon_title' => 'fa-product-hunt',
			'pembelian' => $this->PembelianModel->lihat_by_id($id),
			'petugas' => $this->PetugasModel->lihat_petugas_vendor($this->session->userdata('session_id'))
			);
		$this->load->view('backend/templates/header',$data);
		$this->load->view('backend/pembelian/petugas',$data);
		$this->load->view('backend/templates/footer');

		}
		

	}

}
