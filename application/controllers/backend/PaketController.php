<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PaketController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$model = array('PaketModel','PaketModel','CrudModel');
		$helper = array('nominal');
		$this->load->model($model);
		$this->load->helper($helper);
	}

	public function index()
	{
		$data = array(
			'title' => 'Data paket | Wedding Organizer',
			'page_title' => 'Data paket',
			'icon_title' => 'fa-product-hunt',
			
		);
		if ($this->session->userdata('session_level')=='vendor') {
			$data['paket'] = $this->PaketModel->lihat_paket_vendor($this->session->userdata('session_id'));
		}else{
			$data['paket'] = $this->PaketModel->lihat_paket();
		}
		$this->load->view('backend/templates/header', $data);
		$this->load->view('backend/paket/index');
		$this->load->view('backend/templates/footer');
	}

	public function tambah()
	{
		if (isset($_POST['simpan'])) {
			$nama = $this->input->post('nama');
			$deskripsi = $this->input->post('deskripsi');
			$harga = $this->input->post('harga');
			$deskripsi = $this->input->post('deskripsi');
			$dari = $this->session->userdata('session_id');

			$config['upload_path'] = './assets/upload/images/paket/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('foto')) {
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
			} else {
				$foto = $this->upload->data('file_name');

				$data = array(
					'paket_nama' => $nama,
					'paket_deskripsi' => $deskripsi,
					'paket_harga' => $harga,
					'paket_foto' => $foto,
					'paket_dari' => $dari
				);

				$simpan = $this->PaketModel->tambah_paket($data);
				if ($simpan > 0){
					$this->session->set_flashdata('alert', 'success_post');
					redirect('admin/paket');
				} else {
					$this->session->set_flashdata('alert', 'fail_edit');
					redirect('admin/paket');
				}
			}
		} else {
			$data = array(
				'title' => 'Tambah Data paket | Wedding Organizer',
				'page_title' => 'Tambah Data paket',
				'icon_title' => 'fa-product-hunt',
			);
			$this->load->view('backend/templates/header', $data);
			$this->load->view('backend/paket/tambah');
			$this->load->view('backend/templates/footer');
		}
	}

	public function lihat($id){
		$data = array(
			'title' => 'Lihat Data paket | Wedding Organizer',
			'page_title' => 'Lihat Data paket',
			'icon_title' => 'fa-product-hunt',
			'paket' => $this->PaketModel->lihat_satu_paket($id)
		);
		$this->load->view('backend/templates/header', $data);
		$this->load->view('backend/paket/lihat',$data);
		$this->load->view('backend/templates/footer');
	}

	public function update($id){
		if (isset($_POST['update'])){
			$nama = $this->input->post('nama');
			$deskripsi = $this->input->post('deskripsi');
			$harga = $this->input->post('harga');
			$deskripsi = $this->input->post('deskripsi');
			$dari = $this->session->userdata('session_id');

			$config['upload_path'] = './assets/upload/images/paket/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('foto')) {
				$data = array(
					'paket_nama' => $nama,
					'paket_deskripsi' => $deskripsi,
					'paket_harga' => $harga,
					'paket_foto' => $foto,
					'paket_dari' => $dari
				);

				$update = $this->PaketModel->update_paket($id,$data);
				if ($update > 0){
					$this->session->set_flashdata('alert', 'success_change');
					redirect('admin/paket');
				} else {
					$this->session->set_flashdata('alert', 'fail_edit');
					redirect('admin/paket');
				}
			} else {
				$foto = $this->upload->data('file_name');

				$data = array(
					'paket_nama' => $nama,
					'paket_deskripsi' => $deskripsi,
					'paket_harga' => $harga,
					'paket_foto' => $foto,
					'paket_dari' => $dari
				);

				$update = $this->PaketModel->update_paket($id,$data);
				if ($update > 0){
					$this->session->set_flashdata('alert', 'success_change');
					redirect('admin/paket');
				} else {
					$this->session->set_flashdata('alert', 'fail_edit');
					redirect('admin/paket');
				}
			}
		} else {
			$data = array(
				'title' => 'Update Data paket | Wedding Organizer',
				'page_title' => 'Update Data paket',
				'icon_title' => 'fa-product-hunt',
				'paket' => $this->PaketModel->lihat_satu_paket($id)
			);
			$this->load->view('backend/templates/header', $data);
			$this->load->view('backend/paket/update',$data);
			$this->load->view('backend/templates/footer');
		}
	}

	public function hapus($id){
		$hapus = $this->CrudModel->delete('paket_id',$id,'tb_paket');
		if ($hapus > 0){
			$this->session->set_flashdata('alert', 'success_delete');
			redirect('admin/paket');
		}else{
			redirect('admin/paket');
		}
	}
}
