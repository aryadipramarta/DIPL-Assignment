<?php defined('BASEPATH') or exit('No direct script access allowed');
//Membuat Class BarangModel untuk melakukan koneksi antara Database tb_barang dengan Controller 
class BarangModel extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    public function tambah_barang($data)
    {
        return $this->db->insert('tb_barang', $data);
    }


    public function get_databarang()
    {

        return $this->db->get('tb_barang')->result_array();
    }

    public function get_dataOrder()
    {

        return $this->db->get('tb_order')->result_array();
    }

    // //Fungsi delete barang terhadap barang yang ada pada database tb_barang
    public function deleteBarang($id)
    {
        // return $this->db->delete($this->_table, array("id_barang" => $id));
        $this->db->where('id_barang', $id);
        $this->db->delete('tb_barang');
    }

    public function edit_barangbyID($id)
    {
        // $this->db->get_where($tb_barang);
        // $merk = $this->input->post('id');
        return $this->db->get_where('tb_barang', ['id_barang' => $id])->row_array();
    }

    public function setUpdateData($id) //$data
    {

        $data = [
            "merk" => $this->input->post('merk', true),
            "spesifikasi" => $this->input->post('spesifikasi', true),
            "kondisi_barang" => $this->input->post('$kondisi_barang', true),
            "harga" => $this->input->post('harga', true),
            "stok" => $this->input->post('stok', true)
        ];

        $this->db->where('id_barang', $id);
        $this->db->update('tb_barang', $data);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    //Fungsi untuk menampilkan semua barang yang ada pada tb_barang
    public function TampilkanSemuaBarang()
    {
        return $this->db->get('tb_barang');
    }

    //Fungsi menampilkan detail spesifik dari barang yang dicari sesuai dengan id barang
    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('tb_barang', array('id_barang' => $id))->row();
        return $query;
    }

    //Fungsi mencari barang apakah ada pada tb_barang dengan menerima masukan id barang
    public function SearchBarang($id)
    {
        return $this->db->get_where($this->_table, ["id_barang" => $id])->row();
    }

    //Fungsi melakukan input barang pada tb_barang 
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
    //Fungsi update barang yang dilakukan terhdap database tb_barang
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
    //Fungsi untuk mendapatkan data barang lalu menampilkan nya per row_array
    public function getRows($id = '')
    {
        $this->db->select('*');
        $this->db->from('tb_barang');
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

    public function getViewCart($id_user)
    {
        $unfilteredCartItems = $this->cart->contents();
        $filteredCartItems = [];

        foreach ($unfilteredCartItems as $item) {
            $item_user_id = explode("_", $item["id"])[1];
            if (isset($item["id"])) {
                if ($item_user_id == $id_user) {
                    array_push($filteredCartItems, $item);
                };
            }
        }

        return $filteredCartItems;
    }

    public function get_metodePembayaran()
    {
        $query = $this->db->get('tb_metodepembayaran');
        return $query->result();
    }

    public function get_kurir()
    {
        $query = $this->db->get('tb_kurir');
        return $query->result();
    }

    public function insert_transaksi()
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
    public function insert_alamat($data)
    {
        $this->db->insert('tb_alamatpembeli', $data);
    }

    public function insert_new_order($ids_barang, $qty_barang, $id_pembeli, $total_bayar)
    {
        // insert order
        $order_status = ["Unconfirmed", "Confirmed"];
        $order = array();
        $order["id_pembeli"] = $id_pembeli;
        $order["order_status"] = $order_status[0];
        $order["total_bayar"] = $total_bayar;
        $this->db->insert("tb_order", $order);
        $id_order = $this->db->insert_id();
        // inser order detail
        for ($i = 0; $i < count($ids_barang); $i++) {
            $this->db->insert("tb_order_detail", [
                "id_barang" => $ids_barang[$i],
                "id_order" => $id_order,
                "qty" => $qty_barang[$i]
            ]);
        }
    }

    public function insert_new_transaction(
        $id_metode_pembayaran,
        $id_agent_kurir,
        $id_pembeli,
        $harga_total
    ) {
        $this->db->insert("tb_transaksi", [
            "id_pembeli" => $id_pembeli,
            "id_Agent_kurir" => $id_agent_kurir,
            "id_metodepembayaran" => $id_metode_pembayaran,
            "harga_total" => $harga_total
        ]);
    }
    public function update_stock($ids_barang, $qty_barang)
    {
        for ($i = 0; $i < count($ids_barang); $i++) {
            $hasil = $this->db->where("id_barang", $ids_barang[$i])
                ->get("tb_barang")
                ->result_array();
            $stok = $hasil[0]['stok'];
            $stok = (int)$stok - (int)$qty_barang[$i];
            $this->db->set('stok', $stok);
            $this->db->where('id_barang', $ids_barang[$i]);
            $this->db->update('tb_barang');
        }
    }
    public function update_orderstatus($data)
    {
        $this->db->where('id_order', $data['id_order']);
        $this->db->update('tb_order', $data);
    }
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_barang');
        $this->db->like('merk', $keyword);
        $this->db->or_like('spesifikasi', $keyword);
        return $this->db->get()->result();
    }
    public function get_laporan()
    {
        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $this->db->join('tb_pembeli', 'tb_pembeli.id_pembeli = tb_transaksi.id_pembeli', 'left');
        $this->db->join('tb_kurir', 'tb_kurir.id_Agent_Kurir = tb_transaksi.id_Agent_Kurir', 'left');
        $this->db->join('tb_metodepembayaran', 'tb_metodepembayaran.id_metodepembayaran = tb_transaksi.id_metodepembayaran', 'left');
        return $this->db->get()->result();
    }
    public function get_data_orderan()
    {
        $this->db->select('*');
        $this->db->from('tb_order');
        $this->db->join('tb_pembeli', 'tb_pembeli.id_pembeli = tb_order.id_pembeli');
        return $this->db->get()->result();
    }
    public function get_data_orderdetail()
    {
        $this->db->select('*');
        $this->db->from('tb_order_detail');
        $this->db->join('tb_barang', 'tb_barang.id_barang = tb_order_detail.id_barang');
        $this->db->join('tb_order', 'tb_order.id_order = tb_order_detail.id_order');
        $this->db->join('tb_pembeli', 'tb_pembeli.id_pembeli = tb_order.id_pembeli');
        $this->db->order_by('tb_order_detail.id_order', 'ASC');
        return $this->db->get()->result();
    }
    public function get_total_penjualan()
    {
        $sql = "SELECT sum(harga_total) as harga FROM tb_transaksi";
        $result = $this->db->query($sql);
        return $result->row()->harga;
    }
    public function get_banyak_transaksi()
    {
        $sql = "SELECT count(id_transaksi) as transaksi FROM tb_transaksi";
        $result = $this->db->query($sql);
        return $result->row()->transaksi;
    }
    public function count_unconfirmed()
    {
        $sql = "SELECT count(if(order_status='Unconfirmed',order_status,NULL)) as order_status FROM tb_order";
        $result = $this->db->query($sql);
        return $result->row()->order_status;
    }
}
