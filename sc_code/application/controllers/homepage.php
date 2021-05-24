<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Nusantara Phone Store';
        $this->load->model('BarangModel');
        $data['barang'] = $this->BarangModel->TampilkanSemuaBarang()->result();
        $this->load->view('template/header', $data);
        $this->load->view('landing_page/homepage');
        $this->load->view('template/footer');
    }
    public function aboutus()
    {
        $data['title'] = 'About Us - Nusantara Phone Store';
        $this->load->view('template/header', $data);
        $this->load->view('landing_page/aboutus');
        $this->load->view('template/footer');
    }
    public function contact()
    {
        $data['title'] = 'Contact - Nusantara Phone Store';
        $this->load->view('template/header', $data);
        $this->load->view('landing_page/contact');
        $this->load->view('template/footer');
    }
}
