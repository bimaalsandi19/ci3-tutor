<?php

class Komik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Komik_model');
        // $this->load->database();                 #sudah di pindahkan ke autoload
        // $this->load->library(['form_validation', 'session']);  #sudah dipindahkan ke autoload
    }
    public function index()
    {
        $data = [
            'title' => 'Daftar Komik | Bimanime',
            'active' => 'komik',
            'komik' => $this->Komik_model->getKomik()
        ];
        if ($this->input->post('keyword')) {
            $data['komik'] = $this->Komik_model->cariDataKomik();
        }
        $this->load->view('layout/header', $data);
        $this->load->view('komik/index', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Komik | Bimanime',
            'active' => 'komik',
        ];

        $this->load->view('layout/header', $data);
        $this->load->view('komik/create');
        $this->load->view('layout/footer');
    }
    public function save()
    {
        $data = [
            'title' => 'Tambah Komik | Bimanime',
            'active' => 'komik',
        ];
        $this->form_validation->set_rules('judul', 'Judul', 'required|is_unique[komik.judul]');
        $this->form_validation->set_rules('slug', 'Slug', 'required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
        // $this->form_validation->set_rules('sampul', 'Sampul', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('komik/create',);
            $this->load->view('layout/footer');
        } else {
            $this->Komik_model->tambahDataKomik();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            return redirect('/komik');
        }
    }
    public function delete($id)
    {
        $this->Komik_model->deleteDataKomik($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        return redirect('/komik');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Komik | Bimanime',
            'active' => 'komik',
            'komik' => $this->Komik_model->getKomikById($id)
        ];

        $this->load->view('layout/header', $data);
        $this->load->view('komik/edit', $data);
        $this->load->view('layout/footer');
    }
    public function update($id)
    {
        $data = [
            'title' => 'Edit Komik | Bimanime',
            'active' => 'komik',
            'komik' => $this->Komik_model->getKomikById($id)
        ];
        $komik = $this->Komik_model->getKomikById($id);
        $judul = $komik['judul'];

        $rules = [

            [
                'field' => 'slug',
                'label' => 'Slug',
                'rules' => 'required'
            ],
            [
                'field' => 'penulis',
                'label' => 'Penulis',
                'rules' => 'required'
            ],
            [
                'field' => 'penerbit',
                'label' => 'Penerbit',
                'rules' => 'required'
            ],

        ];
        if ($judul != $this->input->post('judul')) {
            $this->form_validation->set_rules('judul', 'Judul', 'required|is_unique[komik.judul]');
        } else {
            $this->form_validation->set_rules('judul', 'Judul', 'required');
        }
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header', $data);
            $this->load->view('komik/edit', $data);
            $this->load->view('layout/footer');
        } else {
            $this->Komik_model->editDataKomik($id);
            $this->session->set_flashdata('success', 'Data berhasil diedit');
            return redirect('/komik');
        }
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Komik | Bimanime',
            'active' => 'komik',
            'komik' => $this->Komik_model->getKomikById($id)
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('komik/detail', $data);
        $this->load->view('layout/footer');
    }
}
