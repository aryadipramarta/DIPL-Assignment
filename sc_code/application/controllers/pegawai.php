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
        $session = $this->session->userdata('username_pegawai');
        $data['user'] = $this->UserModel->get_profile_pegawai($session);
        $data['order_barang'] = $this->BarangModel->get_dataOrder();
        $this->load->view('template/header', $data);
        $this->load->view('view_pegawai/dashboard_pegawai', $data);
        $this->load->view('template/footer');
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been Logout!</div>');
        redirect('homepage');
    }
    public function list_item()
    {
        $session = $this->session->userdata('username_pegawai');
        $data['user'] = $this->UserModel->get_profile_pegawai($session);
        $data['title'] = 'Pegawai - Nusantara Phone Store';
        $data['tb_barang'] = $this->BarangModel->get_databarang();
        $this->load->view('template/header', $data);
        $this->load->view('view_pegawai/list_item', $data);
        $this->load->view('template/footer');
    }
    public function delete($id)
    {
        $this->BarangModel->deleteBarang($id);
        redirect('pegawai/list_item');
    }

    public function updateData($id)
    {

        $data['tb_barang'] = $this->BarangModel->edit_barangbyID($id);
        $this->form_validation->set_rules('merk', 'merk', 'required');
        $this->form_validation->set_rules('spesifikasi', 'spesifikasi', 'required');
        $this->form_validation->set_rules('kondisi_barang', 'kondisi_barang', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('stok', 'stok', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('view_pegawai/edit_item', $data);
            $this->load->view('template/footer');
        } else {
            $this->BarangModel->setUpdateData($id);
            $this->session->set_flashdata('flash', 'Terubah');
            redirect('pegawai/list_item');
        }
    }

    public function input_item()
    {
        $session = $this->session->userdata('username_pegawai');
        $data['user'] = $this->UserModel->get_profile_pegawai($session);
        $data['title'] = 'Pegawai - Nusantara Phone Store';
        $this->load->view('template/header', $data);
        $this->load->view('view_pegawai/input_item', $data);
        $this->load->view('template/footer');
    }

    public function add()
    {
        $data = [
            'merk' => $this->input->post('merk'),
            'spesifikasi' => $this->input->post('spesifikasi'),
            'kondisi_barang' => $this->input->post('radio1'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
        ];

        $this->BarangModel->tambah_barang($data);
        redirect('pegawai/list_item');
    }

    public function edit($id)
    {
        $post = $this->input->post();
        var_dump($post);
        die();
        $where = array('id_barang' => '$id');
        $data['tb_barang'] = $this->BarangModel->edit_data($where, 'tb_barang')->result();
        $this->load->view('view_pegawai/edit_item');
    }

    public function update($id)
    {
        $merk = $this->input->post('merk');
        $spesifikasi = $this->input->post('spesifikasi');
        $kondisi_barang = $this->input->post('radio1');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');

        $data = array(
            'merk' => $merk,
            'spesifikasi' => $spesifikasi,
            'kondisi_barang' => $kondisi_barang,
            'harga' => $harga,
            'stok' => $stok
        );

        $where = array(
            'id_barang' => $id
        );

        $this->BarangModel->update_data($where, $data, 'tb_barang');
        redirect('pegawai/list_item');
    }

    public function editProfile($id_user)
    {
        $session = $this->session->userdata('username_pegawai');
        $data['user'] = $this->UserModel->get_profile_pegawai($session);
        $data['title'] = 'Edit Profile Pegawai - Nusantara Phone Store';
        $this->load->library('form_validation');
        $this->load->model('UserModel');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('noHP_pegawai', 'noHP_pegawai', 'required|trim');
        $data = [
            'nama_pegawai' => htmlspecialchars($this->input->post('name', true)),
            'username_pegawai' => htmlspecialchars($this->input->post('username', true)),
            'noHP_pegawai' => htmlspecialchars($this->input->post('noHP_pegawai', true))
        ];
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Profile Pegawai - Nusantara Phone Store';
            $session = $this->session->userdata('username_pegawai');
            $user = $this->UserModel->get_profile_pegawai($session);
            $this->load->view('template/header', $data);
            $this->load->view('view_pegawai/editprofile_pegawai', ['data' => $user]);
            $this->load->view('template/footer');
        } else {
            $this->UserModel->editUser_Pegawai($id_user, $data);
            $result = $this->db->get_where('tb_pegawai', ['username_pegawai' => $data['username_pegawai']])->row_array();
            $user = [
                'nama_pegawai' => $result['nama_pegawai'],
                'username_pegawai' => $result['username_pegawai']
            ];
            $this->session->set_userdata($user);
            redirect('pegawai/editProfile/' . $id_user, 'refresh');
        }
    }
}
