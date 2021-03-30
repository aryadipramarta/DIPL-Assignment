<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('pembeliModel');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Pembeli';
            $this->load->view('auth/login', $data);
        } else {
            $data['username_pembeli'] = $this->input->post('username');
            $data['password_pembeli'] = $this->input->post('password');
            $result = $this->pembeliModel->login($data);
            if (!$result) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password or Username is wrong!</div>');
                $data['title'] = 'Login Pembeli';
                $this->load->view('auth/login', $data);
            } else {
                echo ('berhasil login');
            }
        }
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
}
