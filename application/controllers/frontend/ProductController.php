<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProdukModel');
        $this->load->model('PaketModel');
        $this->load->model('AuthModel');
        $this->load->model('PembelianModel');
    }

    public function produk($id)
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
    public function pesan($id)
    {
        if (isset($_POST['login'])) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $pelanggan = array(
                'pelanggan_username' => $username,
                'pelanggan_password' => md5($password)
            );
            $validate = $this->AuthModel->getPelanggan($pelanggan)->num_rows();
            $plg = $this->AuthModel->getPelangganAccount($pelanggan);

            if ($validate>0) {
                $cek_history = $this->PembelianModel->cek_pembelian($id);
                if ($cek_history>0) {
                $get_history = $this->PembelianModel->get_pembelian($id);
                $tgl_now = new  DateTime();      
                $tgl = $get_history['pembelian_tgl'];
                $waktu = explode(' ',$get_history['pembelian_tgl']);
                $tgl_beli = new DateTime($get_history['pembelian_tgl_acara']);

                
              
                    $data['paket'] = $this->PaketModel->lihat_satu_paket($id);
                    $data['pelanggan'] = $plg;
                    $this->load->view('frontend/templates/header', $data);
                    $this->load->view('frontend/produk/form_pemesanan',$data);
                    $this->load->view('frontend/templates/footer');

                } else{

                $data['paket'] = $this->PaketModel->lihat_satu_paket($id);
                $data['pelanggan'] = $plg;
                $this->load->view('frontend/templates/header', $data);
                $this->load->view('frontend/produk/form_pemesanan',$data);
                $this->load->view('frontend/templates/footer');
                }
            }else{
                $this->session->set_flashdata('alert', 'fail_alert');
                redirect(site_url('pesan/'.$id));
            }


            
        }elseif(isset($_POST['beli'])){
            $cek_history = $this->PembelianModel->cek_pembelian($id);
            $data_pembelian = [
                'pembelian_paket' =>  $this->input->post('paket_id')  ,   
                'pembelian_status' => 'bbayar' ,  
                'pembelian_pelanggan' => $this->input->post('pelanggan_id')   ,  
                'pembelian_tgl_acara' => $this->input->post('tgl_acara')  
            ];
            if ($cek_history>0) {
                $get_history = $this->PembelianModel->get_pembelian($id);

                $tgl_acara = new DateTime($get_history['pembelian_tgl_acara']);
                $tgl_mesan = new DateTime($this->input->post('tgl_acara'));

                
                $perbedaan = $tgl_acara->diff($tgl_mesan)->format("%a");
                if ($perbedaan<3) {
                    $this->session->set_flashdata('alert', 'pemesanan_gagal');
                    redirect(base_url('paket/'.$id));
                }else{
                     $simpan = $this->PembelianModel->tambah_pembelian($data_pembelian);
                        if ($simpan>0) {
                            $this->session->set_flashdata('alert', 'success_mesan');
                            redirect(base_url());
                        }else{
                            $this->session->set_flashdata('alert', 'fail_mesan');
                            redirect(base_url());
                        }
                }
           
            }else {
                 $simpan = $this->PembelianModel->tambah_pembelian($data_pembelian);
                        if ($simpan>0) {
                            $this->session->set_flashdata('alert', 'success_mesan');
                            redirect(base_url());
                        }else{
                            $this->session->set_flashdata('alert', 'fail_mesan');
                            redirect(base_url());
                }
            }
        
        }else{

        $data = array(
            'page_title' => 'Pesan PAKET',
            'icon_title' => 'fa-product-hunt',
            'paket' => $this->PaketModel->lihat_satu_paket($id),
        );
        $this->load->view('backend/auth/login_p',$data);
        }
    }
    
}
