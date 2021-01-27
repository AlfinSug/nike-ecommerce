<?php

class Auth_LoginOwner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginOwner_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Login Admin';
        $this->load->view('utils/header-auth', $data);
        $this->load->view('utils/auth_login_owner');
    }

    public function login_owner()
    {
        $this->form_validation->set_rules('email_kasir', 'Email Kasir', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run()) {
            $email_kasir = $this->input->post('email_kasir');
            $password = $this->input->post('password');
            $this->LoginOwner_model->can_login($email_kasir, $password);
        } else {
            $data['title'] = 'Login Owner';
            // $data['user'] = $this->UserProfil_model->getUser();
            $this->load->view('utils/header-auth', $data);
            $this->load->view('utils/auth_login_owner');
        }
    }
    public function logout_owner()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_success', '<script>swal("Logout Success", "Anda berhasil logout", "success")</script>');
        redirect('auth_loginowner');
    }
}
