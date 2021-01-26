<?php

class Kategori extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Kategori';
        $this->load->view('utils/header-owner', $data);
        $this->load->view('side_owner/kategori');
    }
}
