<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('CafeProfil_model');
    }
    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('utils/index', $data);
    }
}
