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
    public function deleteDataKomik($id)
    {
        // CARA 1
        // $this->db->delete('komik', ['id' => $id]);

        // CARA 2
        $this->db->where('id', $id);
        $this->db->delete('komik');
    }

    public function getKomikById($id)
    {
        return $this->db->get_where('komik', ['id' => $id])->row_array();
    }

    public function editDataKomik($id)
    {
        $data = [
            'judul' => $this->input->post('judul', true),
            'slug' => $this->input->post('slug', true),
            'penulis' => $this->input->post('penulis', true),
            'penerbit' => $this->input->post('penerbit', true),
            'sampul' => $this->input->post('sampul', true),
        ];
        $this->db->where('id', $id);
        $this->db->update('komik', $data);
    }

    public function cariDataKomik()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('judul', $keyword);
        return $this->db->get('komik')->result_array();
    }
}
