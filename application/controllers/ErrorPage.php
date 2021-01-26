<?php

class ErrorPage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('LoginUser_model');
        $this->load->model('Trans_model');
        $this->load->library('session');
    }
    public function index()
    {
        $data['title'] = 'Error Page';
        $this->load->view('utils/error_page', $data);
    }
}
