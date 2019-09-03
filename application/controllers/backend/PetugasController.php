<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PetugasController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$model = array('ProdukModel','CrudModel','PetugasModel');
		$helper = array('nominal');
		$this->load->model($model);
		$this->load->helper($helper);
	}

	public function index()
	{
		$data = array(
			'title' => 'Data Petugas | Wedding Organizer',
			'page_title' => 'Data Petugas',
			'icon_title' => 'fa-group',
			'petugas' => $this->CrudModel->view_data('tb_petugas','petugas_date_created'),
		);
		if ($this->session->userdata('session_level')=='vendor') {
			$data['petugas'] = $this->PetugasModel->lihat_petugas_vendor($this->session->userdata('session_id'));
		}else{
			$data['petugas'] = $this->PetugasModel->lihat_petugas();
		}
		$this->load->view('backend/templates/header', $data);
		$this->load->view('backend/petugas/index');
		$this->load->view('backend/templates/footer');
	}

	public function tambah()
	{
		
			$nama = $this->input->post('nama');
			$nope = $this->input->post('nope');


				$data = array(
					'petugas_nama' => $nama,
					'petugas_nope' => $nope,
					'petugas_vendor' => $this->session->userdata('session_id')
				);

				$simpan = $this->CrudModel->insert('tb_petugas',$data);
				if ($simpan > 0){
					$this->session->set_flashdata('alert', 'success_post');
					redirect('admin/petugas');
				} else {
					$this->session->set_flashdata('alert', 'fail_edit');
					redirect('admin/petugas');
				}
			
		
	}
	public function hapus($id){
		$hapus = $this->CrudModel->delete('petugas_id',$id,'tb_petugas');
		if ($hapus > 0){
			$this->session->set_flashdata('alert', 'success_delete');
			redirect('admin/petugas');
		}else{
			redirect('admin/petugas');
		}
	}

}

