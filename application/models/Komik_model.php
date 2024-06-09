<?php

class Komik_model extends CI_Model
{

    public function getKomik()
    {
        return $this->db->get('komik')->result_array();
    }
    public function tambahDataKomik()
    {
        $data = [
            'judul' => $this->input->post('judul', true),
            'slug' => $this->input->post('slug', true),
            'penulis' => $this->input->post('penulis', true),
            'penerbit' => $this->input->post('penerbit', true),
            'sampul' => $this->input->post('sampul', true),
        ];
        $this->db->insert('komik', $data);
    }
}
