<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Bukumodel');
    }

    public function index()
    {
        $data['list'] = $this->Bukumodel->get_buku();
        $this->load->view('index', $data);
    }
}
