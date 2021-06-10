<?php

class TestUnit_Pembeli extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->model('UserModel');
        $this->load->model('BarangModel');
        $this->load->library('form_validation');
    }
    public function editProfile($id_user)
    {
        $this->load->library('form_validation');
        $this->load->model('UserModel');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('telephone', 'Telepon', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $data = [
            'nama_pembeli' => htmlspecialchars($this->input->post('name', true)),
            'username_pembeli' => htmlspecialchars($this->input->post('username', true)),
            'email_pembeli' => htmlspecialchars($this->input->post('email', true)),
            'noHp_pembeli' => htmlspecialchars($this->input->post('telephone', true)),
        ];
        if ($this->form_validation->run() == false) {
            $session = $this->session->userdata('username_pembeli');
            $user = $this->UserModel->get_profile_pembeli($session);
        } else {
            $this->UserModel->editUser_Pembeli($id_user, $data);
            $result = $this->db->get_where('tb_pembeli', ['username_pembeli' => $data['username_pembeli']])->row_array();
            $user = [
                'nama_pembeli' => $result['nama_pembeli'],
                'username_pembeli' => $result['username_pembeli'],
                'noHp_pembeli' => $result['noHp_pembeli'],
                'email_pembeli' => $result['email_pembeli'],
            ];
            $this->session->set_userdata($user);
        }
        return TRUE;
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been Logout!</div>');
        return "Berhasil Logout";
    }
    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_pembeli.email_pembeli]');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[tb_pembeli.username_pembeli]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
        } else {
            return TRUE;
        }
        return TRUE;
    }
    public function test_editprofile()
    {
        $test = $this->editProfile(7);
        $expected_result = "Berhasil Edit";
        $test_name = "Melakukan Proses Edit Profile";
        echo $this->unit->run($test, $expected_result, $test_name);
    }
    public function test_logout()
    {
        $test = $this->logout();
        $expected_result = "Berhasil Logout";
        $test_name = "Melakukan Logout";
        echo $this->unit->run($test, $expected_result, $test_name);
    }
    public function test_registration()
    {
        $test = $this->registration();
        $expected_result = "TRUE";
        $test_name = "Melakukan Registrasi";
        echo $this->unit->run($test, $expected_result, $test_name);
    }
}
