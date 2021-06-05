<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemilik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('UserModel');
    }
    public function index()
    {
        $data['title'] = 'Dashboard Pemilik - Nusantara Phone Store';
        $this->load->model('BarangModel');
        $session = $this->session->userdata('username_pemilik');
        if (!isset($session)) redirect('auth');
        $user = $this->UserModel->get_profile_pemilik($session);
        $data['laporan'] = $this->BarangModel->get_laporan();
        $data['total_jual'] = $this->BarangModel->get_total_penjualan();
        $data['total_user'] = $this->UserModel->total_user();
        $data['total_transaksi'] = $this->BarangModel->get_banyak_transaksi();
        $data['total_unconfirmed'] = $this->BarangModel->count_unconfirmed();
        $this->load->view('template/header', $data);
        $this->load->view('view_pemilik/dashboard_pemilik', ['data' => $user]);
        $this->load->view('template/footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been Logout!</div>');
        redirect('homepage');
    }
    public function editProfile($id_user)
    {
        $data['title'] = 'Edit Profile Pemilik - Nusantara Phone Store';
        $this->load->library('form_validation');
        $this->load->model('UserModel');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $data = [
            'nama_pemilik' => htmlspecialchars($this->input->post('name', true)),
            'username_pemilik' => htmlspecialchars($this->input->post('username', true)),
        ];
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Profile Pemilik - Nusantara Phone Store';
            $session = $this->session->userdata('username_pemilik');
            $user = $this->UserModel->get_profile_pemilik($session);
            $this->load->view('template/header', $data);
            $this->load->view('view_pemilik/editprofile_pemilik', ['data' => $user]);
            $this->load->view('template/footer');
        } else {
            $this->UserModel->editUser_Pemilik($id_user, $data);
            $result = $this->db->get_where('tb_pemilik', ['username_pemilik' => $data['username_pemilik']])->row_array();
            $user = [
                'nama_pemilik' => $result['nama_pemilik'],
                'username_pemilik' => $result['username_pemilik']
            ];
            $this->session->set_userdata($user);
            redirect('pemilik/editProfile/' . $id_user, 'refresh');
        }
    }
}
