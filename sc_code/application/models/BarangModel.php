<?php defined('BASEPATH') or exit('No direct script access allowed');

class BarangModel extends CI_Model
{
    function __construct()
    {
        $this->Table = 'tb_barang';
    }
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

    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('tb_barang', array('id_barang' => $id))->row();
        return $query;
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
    public function getRows($id = '')
    {
        $this->db->select('*');
        $this->db->from($this->Table);
        if ($id) {
            $this->db->where('id_barang', $id);
            $query = $this->db->get();
            $result = $query->row_array();
        } else {
            $this->db->order_by('merk', 'asc');
            $query = $this->db->get();
            $result = $query->result_array();
        }

        // Return fetched data
        return !empty($result) ? $result : false;
    }
}
