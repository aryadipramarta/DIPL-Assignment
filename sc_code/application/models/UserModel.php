<?php defined('BASEPATH') or exit('No direct script access allowed');
//Class UserModel untuk melakukan koneksi ataupun aktifitas database user dengan user 
class UserModel extends CI_Model
{
    #Fungsi untuk create akun pembeli yang nantinya data akan disimpan pada tb_pembeli dan fungsi ini digunakan saat akan melakukan registrasi
    public function createPembeli()
    {
        $post = $this->input->post();
        $this->username_pembeli = $post["username"];
        $this->password_pembeli = password_hash($post["password"], PASSWORD_DEFAULT);
        $this->nama_pembeli = $post["name"];
        $this->noHp_pembeli = $post["telepon"];
        $this->email_pembeli = $post["email"];
        $this->role_id = 1;
        $this->db->insert('tb_pembeli', $this);
    }

    //Fungsi ini untuk melakukan cek data login dengan data yang ada pada database dan melakukan validasinya serta jika berhasil akan redirect menuju role nya masing masing
    public function login_pembeli($data)
    {
        $result = $this->db->get_where('tb_pembeli', ['username_pembeli' => $data['username_pembeli']])->row_array();
        if ($result) {
            if (password_verify($data['password_pembeli'], $result['password_pembeli'])) {
                $user = [
                    'id_pembeli' => $result['id_pembeli'],
                    'username_pembeli' => $result['username_pembeli'],
                    'nama_pembeli' => $result['nama_pembeli'],
                    'noHp_pembeli' => $result['noHp_pembeli'],
                    'email_pembeli' => $result['email_pembeli'],
                    'role_id' => $result['role_id']
                ];
                $this->session->set_userdata($user);
                redirect('pembeli');
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function login_pemilik($data)
    {
        $result = $this->db->get_where('tb_pemilik', ['username_pemilik' => $data['username_pemilik']])->row_array();
        if ($result) {
            if ($data['password_pemilik'] = $result['password_pemilik']) {
                $user = [
                    'id_pemilik' => $result['id_pemilik'],
                    'username_pemilik' => $result['username_pemilik'],
                    'nama_pemilik' => $result['nama_pemilik'],
                    'role_id' => $result['role_id']
                ];
                $this->session->set_userdata($user);
                redirect('pemilik');
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function login_pegawai($data)
    {
        $result = $this->db->get_where('tb_pegawai', ['username_pegawai' => $data['username_pegawai']])->row_array();
        if ($result) {
            if ($data['password_pegawai'] = $result['password_pegawai']) {
                $user = [
                    'id_pegawai' => $result['id_pegawai'],
                    'username_pegawai' => $result['username_pegawai'],
                    'nama_pegawai' => $result['nama_pegawai'],
                    'noHP_pegawai' => $result['noHp_pegawai'],
                    'role_id' => $result['role_id']
                ];
                $this->session->set_userdata($user);
                redirect('pegawai');
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
