<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('BarangModel');
        $this->load->model('UserModel');
    }
    function index()
    {
        $id_user = $this->session->all_userdata()["id_pembeli"];
        $data = array();
        $filteredCartItems = $this->BarangModel->getViewCart($id_user);
        $data['title'] = 'Cart - Nusantara Phone Store';
        $data['cartItems'] = $filteredCartItems;
        $session = $this->session->userdata('username_pembeli');
        $user = $this->UserModel->get_profile_pembeli($session);
        $data['user'] = $user;
        $this->load->view('template/header', $data);
        $this->load->view('view_pembeli/cart', $data);
        $this->load->view('template/footer');
    }
    function updateItemQty()
    {
        $update = 0;

        // Get cart item info
        $rowid = $this->input->get('rowid');
        $qty = $this->input->get('qty');

        // Update item in the cart
        if (!empty($rowid) && !empty($qty)) {
            $data = array(
                'rowid' => $rowid,
                'qty'   => $qty
            );
            $update = $this->cart->update($data);
        }

        // Return response
        echo $update ? 'ok' : 'err';
    }

    function removeItem($rowid)
    {
        // Remove item from cart
        $remove = $this->cart->remove($rowid);

        // Redirect to the cart page
        redirect('cart/');
    }
}
