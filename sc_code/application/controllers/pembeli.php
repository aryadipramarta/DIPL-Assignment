<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembeli extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('pembeliModel');
    }
    public function index()
    {
        $data['title'] = 'Homepage Pembeli - Nusantara Phone Store';
        $this->load->view('template/header', $data);
        $this->load->view('view_pembeli/homepage');
        $this->load->view('template/footer');
    }
    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_pembeli.email_pembeli]');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[tb_pembeli.username_pembeli]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Member Registration';
            $this->load->view('auth/register', $data);
        } else {
            $this->pembeliModel->createPembeli();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun berhasil dibuat</div>');
            redirect('auth');
        }
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
