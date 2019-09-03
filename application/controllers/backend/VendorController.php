<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class VendorController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$model = array('ProdukModel','CrudModel');
		$helper = array('nominal');
		$this->load->model($model);
		$this->load->helper($helper);
	}

	public function index()
	{
		$data = array(
			'title' => 'Data vendor | Wedding Organizer',
			'page_title' => 'Data vendor',
			'icon_title' => 'fa-group',
			'vendor' => $this->CrudModel->view_data('tb_vendor','vendor_date_created'),
		);
		$this->load->view('backend/templates/header', $data);
		$this->load->view('backend/vendor/index',$data);
		$this->load->view('backend/templates/footer');
	}

	public function tambah()
	{
		
			$nama = $this->input->post('nama');
			$nope = $this->input->post('nope');
			$alamat = $this->input->post('alamat');
			$username = $this->input->post('username');
			$password = $this->input->post('password');



				$data = array(
					'vendor_nama' => $nama,
					'vendor_nope' => $nope,
					'vendor_alamat' => $alamat,
					'vendor_username' => $username,
					'vendor_password' => md5($password),
				);

				$simpan = $this->CrudModel->insert('tb_vendor',$data);
				if ($simpan > 0){
					$this->session->set_flashdata('alert', 'success_post');
					redirect('admin/vendor');
				} else {
					$this->session->set_flashdata('alert', 'fail_edit');
					redirect('admin/vendor');
				}
			
		
	}
	public function hapus($id){
		$hapus = $this->CrudModel->delete('vendor_id',$id,'tb_vendor');
		if ($hapus > 0){
			$this->session->set_flashdata('alert', 'success_delete');
			redirect('admin/vendor');
		}else{
			redirect('admin/vendor');
		}
	}

}

