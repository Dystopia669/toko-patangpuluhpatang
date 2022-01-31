<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelCRUD');
        $this->load->library('template');
    }

    public function index()
    {
        $this->template->load('layout_home', 'member/Checkout');
    }
}
