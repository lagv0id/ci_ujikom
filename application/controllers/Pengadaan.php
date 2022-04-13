<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengadaan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Bukumodel');
    }

    public function index()
    {
        $data['lowstock'] = $this->Bukumodel->get_buku_stock();
        $this->load->view('pengadaan', $data);
    }
}
