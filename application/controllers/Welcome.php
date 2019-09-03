<?php

defined('BASEPATH') OR exit('No direct script access allowed');

	class Welcome extends CI_Controller
	{
		
	 public function __construct()
    {
        parent::__construct();
        $this->load->model('ProdukModel');
        $this->load->model('CrudModel');
        $this->load->model('PaketModel');
        $this->load->model('PembelianModel');

    }
    
    public function index()
    {
        $data = array(
            'page_title' => '',
            'icon_title' => 'fa-balance-scale',
            'paket' => $this->PaketModel->lihat_paket(),
            'vendor' => $this->CrudModel->view_data('tb_vendor','vendor_date_created'),
        );

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('testt',$data);
        $this->load->view('frontend/templates/footer');
    }
    public function paket($id)
    {
        $data = array(
            'page_title' => 'Data Produk',
            'icon_title' => 'fa-product-hunt',
            'paket' => $this->PaketModel->lihat_satu_paket($id),
        );
        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/produk/satuan',$data);
        $this->load->view('frontend/templates/footer');
    }
    public function daftar()
    {
        if (isset($_POST['daftar'])) {
            $data = [
                'pelanggan_username' => $this->input->post('username'), 
                'pelanggan_alamat' => $this->input->post('alamat'), 
                'pelanggan_password' => md5($this->input->post('password')), 
                'pelanggan_email' => $this->input->post('email'), 
                'pelanggan_nama' => $this->input->post('nama'), 
                'pelanggan_nope' => $this->input->post('nope'), 
                'pelanggan_jk' => $this->input->post('jk'), 
            ];
            $simpan = $this->CrudModel->insert('tb_pelanggan',$data);
            if ($simpan>0) {
                $this->session->set_flashdata('alert', 'success_daftar');
                redirect(site_url(''));
            }else{
                $this->session->set_flashdata('alert', 'fail_daftar');
                redirect(site_url(''));
            
            }

        }else{

        $data = array(
            'page_title' => 'PEndaftaran',
        );
        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/form_pendaftaran',$data);
        $this->load->view('frontend/templates/footer');
        }
    }
}

?>