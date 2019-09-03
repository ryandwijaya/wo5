<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function getPelanggan($pelanggan){
        return $this->db->get_where('tb_pelanggan',$pelanggan);
    }
    function getAdmin($admin){
        return $this->db->get_where('tb_user',$admin);
    }
    function getVendor($vendor){
        return $this->db->get_where('tb_vendor',$vendor);
    }
    function getPelangganAccount($pelanggan){
        $query = $this->db->get_where('tb_pelanggan',$pelanggan);
        return $query->row_array();
    }
    function getVendorAccount($vendor){
        $query = $this->db->get_where('tb_vendor',$vendor);
        return $query->row_array();
    }
    function getAdminAccount($admin){
        $query = $this->db->get_where('tb_user',$admin);
        return $query->row_array();
    }
}


