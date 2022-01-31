<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelCRUD');
        $this->load->library('cart', 'template');
    }

    public function AddCart($id)
    {
        $produk = $this->ModelCRUD->find($id);

        $data = array(
            'id'      => $produk->id_produk,
            'qty'     => 1,
            'price'   => $produk->harga,
            'name'    => $produk->nama_produk,
            'kategori' => $produk->id_kategori
        );

        $this->cart->insert($data);
        redirect('Home');
    }

    public function detail_keranjang()
    {
        $this->template->load('layout_home', 'member/cart');
    }
}
