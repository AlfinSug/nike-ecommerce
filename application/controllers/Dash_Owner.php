<?php

class Dash_Owner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('CafeProfil_model');
        $this->load->model('LoginOwner_model');
        $this->load->model('Trans_model');
        $this->load->library('session');
    }
    public function index()
    {
        if ($this->LoginOwner_model->check_session()) {
            $data['title'] = 'Dashboard Owner';
            $data['list_reserv'] = $this->Trans_model->getTrans();
            $data['total_reserv'] = $this->Trans_model->getTotalReservasi();
            $this->load->view('utils/header-owner', $data);
            $this->load->view('side_owner/dash_owner', $data);
        } else {
            $this->session->set_flashdata('session_failed', '<script>swal("Login Access", "Anda harus login terlebih dahulu", "info")</script>');
            redirect('errorpage');
        }
    }
    public function accepted()
    {
        if (isset($_REQUEST['sval'])) {
            $res = $this->Trans_model->acc_reserv();
            if ($res > 0) {
                $this->session->set_flashdata('edit_success', '<script>swal("Cancel", "Reservasi telah dibatalkan", "success")</script>');
            }
            return redirect('dash_owner');
        }
    }
    public function refused()
    {
        if (isset($_REQUEST['sval'])) {
            $res = $this->Trans_model->refuse_reserv();
            if ($res > 0) {
                $this->session->set_flashdata('edit_success', '<script>swal("Cancel", "Reservasi telah dibatalkan", "success")</script>');
            }
            return redirect('dash_owner');
        }
    }
}
