<?php defined('BASEPATH') or exit('No direct script access allowed');

class pembelimodel extends CI_Model
{
    public $username_pembeli;
    public $nama_pembeli;
    public $password_pembeli;
    public $noHp_pembeli;
    public $email_pembeli;
    public $role_id;


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

    public function login($data)
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
                if ($user['role_id'] == 1) {
                    echo ('login sebagai pembeli');
                } else if ($user['role_id'] == 2) {
                    echo ('login sebagai pegawai');
                } else {
                    echo ('login sebagai pemilik');
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
