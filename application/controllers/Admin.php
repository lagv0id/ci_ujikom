<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Bukumodel');
        $this->load->model('Penerbitmodel');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['list'] = $this->Bukumodel->get_buku();
        $data['penerbit'] = $this->Penerbitmodel->get_penerbit();
        $this->load->view('admin/admin', $data);
    }

    public function add()
    {
        $data['list'] = $this->Penerbitmodel->get_penerbit();
        $this->load->view('admin/admin_insertbuku', $data);
    }

    public function insert()
    {
        $this->form_validation->set_rules('harga', 'Harga', 'numeric');
        $this->form_validation->set_rules('stok', 'Stok', 'numeric');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('pesan', 'Data gagal ditambah, tolong cek isian form lagi.');
            $this->load->view('admin/admin_insertbuku');
        } else {
            $this->Bukumodel->insert($this->input->post());
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('admin'));
        }
    }

    public function edit($id)
    {
        $data['list'] = $this->Penerbitmodel->get_penerbit();
        $data['detail'] = $this->Bukumodel->get_detail($id);
        $this->load->view('admin/admin_editbuku', $data);
    }

    public function editpenerbit($id)
    {
        $data['detail'] = $this->Penerbitmodel->get_detail($id);
        $this->load->view('admin/admin_editpenerbit', $data);
    }

    public function update($id)
    {
        if ($this->Bukumodel->update(($this->input->post()), $id)) {
            $this->session->set_flashdata('pesan', 'Data buku berhasil diedit.');
            redirect(base_url('admin'));
        }
    }

    public function updatepenerbit($id)
    {
        if ($this->Penerbitmodel->update(($this->input->post()), $id)) {
            $this->session->set_flashdata('pesan', 'Data penerbit berhasil diubah.');
            redirect(base_url('admin'));
        }
    }

    public function delete($id)
    {
        $this->db->where('id_buku', $id);
        if ($this->db->delete('buku')) {
            $this->session->set_flashdata('pesan', 'Data buku berhasil dihapus.');
            redirect(base_url('admin'));
        }
    }
}
