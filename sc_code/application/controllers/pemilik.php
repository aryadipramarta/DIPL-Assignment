<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemilik extends CI_Controller
# Fungsi buat pemanggilan library dan model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('UserModel');
    }

// Fungsi buat memasukkan username dan password serta validasi
    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('auth/login', $data);
        } else {
            $data['username_pemilik'] = $this->input->post('username');
            $data['password_pemilik'] = $this->input->post('password');
            $result = $this->UserModel->login($data);
            if (!$result) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password or Username is wrong!</div>');
                $data['title'] = 'Login';
                $this->load->view('auth/login', $data);
            } else {
                echo ('berhasil login');
            }
        }
    }

// Fungsi buat melihat laporan serta cek laporan ditemukan apa tidak
    public function view_laporan()
    {
        $this->form_validation->set_rules('kodelaporan', 'KodeLaporan', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Lihat Laporan';
            $this->load->view('pemilik/laporan', $data);
        } else {
            $data['kode_laporan'] = $this->input->post('kodelaporan');
            $result = $this->UserModel->login($data);
            if (!$result) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Laporan Tidak Ditemukan !</div>');
                $data['title'] = 'Lihat Laporan';
                $this->load->view('pemilik/laporan', $data);
            }
        }
    }
}
