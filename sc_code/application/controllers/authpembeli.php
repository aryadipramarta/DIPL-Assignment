<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthPembeli extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('UserModel');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('auth/login', $data);
        } else {
            $data['username_pembeli'] = $this->input->post('username');
            $data['password_pembeli'] = $this->input->post('password');
            $result = $this->UserModel->login_pembeli($data);
            if (!$result) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password or Username is wrong!</div>');
                $data['title'] = 'Login Pembeli';
                $this->load->view('auth/login', $data);
            } else {
                echo ('berhasil login');
            }
        }
    }
}
