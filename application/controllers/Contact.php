<?php

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('CafeProfil_model');
    }
    public function index()
    {
        $data['title'] = 'Contact';
        // $data['cafe_catalog'] = $this->CafeProfil_model->getAllCafe();
        $this->load->view('utils/contact', $data);
        // $this->load->view('utils/footer');
    }
}
