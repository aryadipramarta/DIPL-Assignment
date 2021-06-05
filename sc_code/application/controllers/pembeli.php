<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembeli extends CI_Controller
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
        $data['title'] = 'Homepage Pembeli - Nusantara Phone Store';
        $this->load->model('BarangModel');
        $session = $this->session->userdata('username_pembeli');
        if (!isset($session)) redirect('auth');
        $user = $this->UserModel->get_profile_pembeli($session);
        $data['barang'] = $this->BarangModel->TampilkanSemuaBarang()->result();
        $this->load->view('template/header', $data);
        $this->load->view('view_pembeli/homepage', ['data' => $user]);
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
            $this->UserModel->createPembeli();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun berhasil dibuat</div>');
            redirect('authpembeli');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been Logout!</div>');
        redirect('homepage');
    }
    public function cart()
    {
        $session = $this->session->userdata('username');
        $user = $this->session->userdata('id_user');
        $this->load->model('authModel');
        $this->load->model('BarangModel');
        $data['user'] = $this->authModel->get_profile($session);
        $data['order'] = $this->BarangModel->getviewcart($user);
        $this->load->view('template/header', $data);
        $this->load->view('view_pembeli/cart', $data);
        $this->load->view('template/footer');
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
            $data['title'] = 'Edit Profile Pembeli - Nusantara Phone Store';
            $this->load->view('template/header', $data);
            $this->load->view('view_pembeli/editprofile_pembeli', ['data' => $user]);
            $this->load->view('template/footer');
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
            redirect('pembeli/editProfile/' . $id_user, 'refresh');
        }
    }
    public function checkout()
    {
        $session = $this->session->userdata('username_pembeli');
        $data['user'] = $this->UserModel->get_profile_pembeli($session);
        $data['title'] = 'Checkout Barang - Nusantara Phone Store';
        $nama_pembeli = $this->session->userdata('nama_pembeli');
        $user = $this->session->userdata('id_pembeli');
        $this->load->model('UserModel');
        $this->load->model('BarangModel');
        $data['pembayaran'] = $this->BarangModel->get_metodePembayaran();
        $data['kurir'] = $this->BarangModel->get_kurir();
        $data['user'] = $user;
        $data['nama'] = $nama_pembeli;
        $data['cartItems'] = $this->BarangModel->getviewcart($user);
        $this->load->view('template/header', $data);
        $this->load->view('view_pembeli/checkout', $data);
        $this->load->view('template/footer');
    }
    public function confirmation()
    {
        $id_pembeli = $this->session->userdata('id_pembeli');
        $data['title'] = 'Confirmation - Nusantara Phone Store';
        $data_alamat = array();
        $post = $this->input->post();
        $session = $this->session->userdata('username_pembeli');
        $data['user'] = $this->UserModel->get_profile_pembeli($session);
        $data_alamat["id_pembeli"] = $id_pembeli;
        $data_alamat["jalan_alamat"] = $post["jalan_alamat"];
        $data_alamat["kota_alamat"] = $post["kota_alamat"];
        $data_alamat["kode_pos"] = $post["kode_pos"];
        $data_alamat["provinsi_alamat"] = $post["provinsi_alamat"];
        $harga_total = $post["total_harga"];
        $this->BarangModel->insert_alamat($data_alamat);

        $ids_barang = explode(",", $post["ids_barang"]);
        $qty_barang = explode(",", $post["qty_barang"]);
        $this->BarangModel->update_stock($ids_barang, $qty_barang);
        $this->BarangModel->insert_new_order($ids_barang, $qty_barang, $id_pembeli, $harga_total);

        $id_metode_pembayaran = $post["metode_pembayaran"];
        $id_agent_kurir = $post["agent_kurir"];
        $this->BarangModel->insert_new_transaction(
            $id_metode_pembayaran,
            $id_agent_kurir,
            $id_pembeli,
            $harga_total
        );
        $this->load->view('template/header', $data);
        $this->load->view('view_pembeli/confirmation', $data);
        $this->load->view('template/footer');
    }

    public function caribarang()
    {
        $data['title'] = 'Homepage Pembeli - Nusantara Phone Store';
        $this->load->model('BarangModel');
        $session = $this->session->userdata('username_pembeli');
        $user = $this->UserModel->get_profile_pembeli($session);
        $keyword = $this->input->post('keyword');
        $data['caribrg'] = $this->BarangModel->get_keyword($keyword);
        $this->load->view('template/header', $data);
        $this->load->view('view_pembeli/searchbarang', ['data' => $user]);
        $this->load->view('template/footer');
    }
    public function view_myorder()
    {
        $data['title'] = 'My Order - Nusantara Phone Store';
        $this->load->model('BarangModel');
        $session = $this->session->userdata('username_pembeli');
        $id_pembeli = $this->session->userdata('id_pembeli');
        $user = $this->UserModel->get_profile_pembeli($session);
        $data['myorder'] = $this->UserModel->view_myorder($id_pembeli);
        $this->load->view('template/header', $data);
        $this->load->view('view_pembeli/myorder', ['data' => $user]);
        $this->load->view('template/footer');
    }
}
