<?php

class TestUnit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->model('UserModel');
        $this->load->model('BarangModel');
        $this->load->library('form_validation');
    }

    public function delete($id)
    {
        $this->BarangModel->deleteBarang($id);
        return TRUE;
    }

    public function updateData($id)
    {
        $session = $this->session->userdata('username_pegawai');
        $data['user'] = $this->UserModel->get_profile_pegawai($session);
        $data['tb_barang'] = $this->BarangModel->edit_barangbyID($id);
        $this->form_validation->set_rules('merk', 'merk', 'required');
        $this->form_validation->set_rules('spesifikasi', 'spesifikasi', 'required');
        $this->form_validation->set_rules('kondisi_barang', 'kondisi_barang', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('stok', 'stok', 'required');
        return TRUE;
        if ($this->form_validation->run() == FALSE) {
        } else {
            $this->BarangModel->setUpdateData($id);
            $this->session->set_flashdata('flash', 'Terubah');
            return TRUE;
        }
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
        return TRUE;
        if ($this->form_validation->run() == false) {
            $session = $this->session->userdata('username_pegawai');
            $user = $this->UserModel->get_profile_pegawai($session);
        } else {
            $this->UserModel->editUser_Pegawai($id_user, $data);
            $result = $this->db->get_where('tb_pegawai', ['username_pegawai' => $data['username_pegawai']])->row_array();
            $user = [
                'nama_pegawai' => $result['nama_pegawai'],
                'username_pegawai' => $result['username_pegawai']
            ];
            $this->session->set_userdata($user);
            return TRUE;
        }
    }
    public function proses($id_order)
    {
        $data = array(
            'id_order' => $id_order,
            'order_status' => 'Confirmed'
        );
        $this->BarangModel->update_orderstatus($data);
        return "Berhasil Confirmasi";
    }
    public function test_delete()
    {
        $test = $this->delete(5);
        $expected_result = TRUE;
        $test_name = "Melakukan Delete Barang";
        echo $this->unit->run($test, $expected_result, $test_name);
    }
    public function test_update()
    {
        $test = $this->updateData(6);
        $expected_result = TRUE;
        $test_name = "Melakukan Update Barang";
        echo $this->unit->run($test, $expected_result, $test_name);
    }
    public function test_editprofile()
    {
        $test = $this->editProfile(4);
        $expected_result = TRUE;
        $test_name = "Melakukan Edit Profile";
        echo $this->unit->run($test, $expected_result, $test_name);
    }
    public function test_proses()
    {
        $test = $this->proses(7);
        $expected_result = "Berhasil Confirmasi";
        $test_name = "Melakukan Proses Confirmasi";
        echo $this->unit->run($test, $expected_result, $test_name);
    }
}
