<?php

class Bukumodel extends CI_Model
{
    public function get_buku()
    {
        return $this->db->get('buku')->result_array();
    }

    public function get_buku_stock()
    {
        $this->db->order_by('stok', 'ASC');
        return $this->db->get('buku')->result_array();
    }

    public function get_detail($id)
    {
        $this->db->where('id_buku', $id);
        return $this->db->get('buku')->row_array();
    }

    function insert($a)
    {
        $data = [
            'id_buku' => $a['id_buku'],
            'kategori' => $a['kategori'],
            'nama_buku' => $a['nama_buku'],
            'harga' => $a['harga'],
            'stok' => $a['stok'],
            'nama_penerbit' => $a['nama_penerbit']
        ];

        return $this->db->insert('buku', $data);
    }

    function update($a, $id)
    {
        $data = [
            'id_buku' => $a['id_buku'],
            'kategori' => $a['kategori'],
            'nama_buku' => $a['nama_buku'],
            'harga' => $a['harga'],
            'stok' => $a['stok'],
            'nama_penerbit' => $a['nama_penerbit']
        ];
        $this->db->where('id_buku', $id);
        return $this->db->update('buku', $data);
    }
}
