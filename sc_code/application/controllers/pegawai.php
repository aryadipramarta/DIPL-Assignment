<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('UserModel');
        $this->load->model('BarangModel');
    }
    public function index()
    {
        $data['title'] = 'Pegawai - Nusantara Phone Store';
        $this->load->view('template/header', $data);
        $this->load->view('view_pegawai/dashboard');
        $this->load->view('template/footer');
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been Logout!</div>');
        $data['title'] = 'Nusantara Phone Store';
        $this->load->view('template/header', $data);
        $this->load->view('landing_page/homepage');
        $this->load->view('template/footer');
    }
}
