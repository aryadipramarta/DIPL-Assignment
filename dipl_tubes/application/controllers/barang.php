<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('BarangModel');
        $this->load->model('UserModel');
    }
    public function spesifikasi($id)
    {
        $session = $this->session->userdata('username_pembeli');
        $user = $this->UserModel->get_profile_pembeli($session);
        $data['user'] = $user;
        $this->load->model('BarangModel');
        $product = array();
        $product['products'] = $this->BarangModel->getRows();
        $spesifikasi = $this->BarangModel->detail_data($id);
        $data['spesifikasi'] = $spesifikasi;
        $data['title'] = 'Nusantara Phone Store';
        $this->load->view('template/header', $data);
        $this->load->view('template/spesifikasi_barang', $data, $product);
        $this->load->view('template/footer');
    }
    #Memasukkan Barang ke dalam cart dengan parameter id barang sebagai inputan
    public function addToCart($id)
    {
        $id_user = $this->session->all_userdata()["id_pembeli"];
        $barang = $this->BarangModel->getRows($id);
        $data = array(
            'id' => $barang['id_barang'] . "_" . $id_user,
            'name' => $barang['merk'],
            'qty' => 1,
            'price' => $barang['harga'],
            'image' => $barang['img_barang'],
        );
        $this->cart->insert($data);
        redirect('cart/');
    }
}
