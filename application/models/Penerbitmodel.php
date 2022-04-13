<?php

class Penerbitmodel extends CI_Model
{
    public function get_penerbit()
    {
        return $this->db->get('penerbit')->result_array();
    }

    public function get_detail($id)
    {
        $this->db->where('id_penerbit', $id);
        return $this->db->get('penerbit')->row_array();
    }

    function update($a, $id)
    {
        $data = [
            'id_penerbit' => $a['id_penerbit'],
            'nama_penerbit' => $a['nama_penerbit'],
            'alamat' => $a['alamat'],
            'kota' => $a['kota'],
            'telepon' => $a['telepon']
        ];
        $this->db->where('id_penerbit', $id);
        return $this->db->update('penerbit', $data);
    }
}
