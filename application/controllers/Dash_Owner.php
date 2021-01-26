<?php

class Dash_Owner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CafeProfil_model');
        $this->load->model('LoginOwner_model');
        $this->load->model('Reserv_model');
        $this->load->library('session');
    }
    public function index()
    {
        if ($this->LoginOwner_model->check_session()) {
            $data['title'] = 'Dashboard Owner';
            $data['list_reserv'] = $this->Reserv_model->getReservUser();
            $data['total_reserv'] = $this->Reserv_model->getTotalReservasi();
            $this->load->view('utils/header-owner', $data);
            $this->load->view('side_owner/dash_owner', $data);
        } else {
            $this->session->set_flashdata('session_failed', '<script>swal("Login Access", "Anda harus login terlebih dahulu", "info")</script>');
            redirect('errorpage');
        }
    }
}
