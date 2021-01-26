<?php

class Auth_CreateUser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CreateUser_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Create User';
        $this->load->view('utils/header-auth', $data);
        $this->load->view('utils/auth_create_user');
    }

    public function create_acc()
    {
        $this->CreateUser_model->createUser();
        $this->session->set_flashdata('success', '<script>swal("Success", "Registrasi User Berhasil", "success")</script>');
        redirect('auth_loginuser');
    }
}
