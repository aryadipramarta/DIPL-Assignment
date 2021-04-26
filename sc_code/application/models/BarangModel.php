<?php defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    private $_table = "tb_barang";

    public $id_barang;
    public $merk;
    public $spesifikasi;
    public $kondisi_barang;
    public $harga;
    public $description;

    public function TampilkanSemuaBarang()
    {
        return $this->db->get('tb_barang');
    }

    public function SearchBarang($id)
    {
        return $this->db->get_where($this->_table, ["id_barang" => $id])->row();
    }

    public function InputBarang()
    {
        $post = $this->input->post();
        $this->id_barang = uniqid();
        $this->merk = $post["merk"];
        $this->spesifikasi = $post["spesifikasi"];
        $this->kondisi_barang = $post["kondisi_barang"];
        $this->harga = $post["harga"];
        $this->description = $post["description"];
        return $this->db->insert($this->_table, $this);
    }

    public function UpdateBarang()
    {
        $post = $this->input->post();
        $this->id_barang = $post["idbarang"];
        $this->merk = $post["merk"];
        $this->spesifikasi = $post["spesifikasi"];
        $this->kondisi_barang = $post["kondisi_barang"];
        $this->harga = $post["harga"];
        $this->description = $post["description"];
        return $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }

    public function deleteBarang($id)
    {
        return $this->db->delete($this->_table, array("id_barang" => $id));
    }
}
