<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthPegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('UserModel');
    }
    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('pegawai');
        }
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $condition = $this->form_validation->run();
        if ($condition == false) {
            $data['title'] = 'Login - Pegawai PSSTORE';
            $this->load->view('auth/loginpegawai', $data);
        } else {
            $data['username_pegawai'] = $this->input->post('username');
            $data['password_pegawai'] = $this->input->post('password');
            $result = $this->UserModel->login_pegawai($data);
            if (!$result) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password or Username is wrong!</div>');
                $data['title'] = 'Login - Pegawai PSSTORE';
                $this->load->view('auth/loginpegawai', $data);
            } else {
                echo ('Berhasil Login Pegawai');
            }
        }
    }
}
