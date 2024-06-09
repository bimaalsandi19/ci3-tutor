<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = [
            'title' => 'Home | Komik Bima',
            'active' => 'home'
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('home/index');
        $this->load->view('layout/footer');
    }
}
