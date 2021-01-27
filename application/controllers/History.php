<?php

class History extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Customer_model');
        $this->load->model('LoginUser_model');
        $this->load->model('Trans_model');
        $this->load->library('session');
    }
    public function index()
    {
        if ($this->LoginUser_model->check_session()) {
            $data['title'] = 'History';
            $data['list_trans'] = $this->Trans_model->getTrans();
            $this->load->view('utils/header-server', $data);
            $this->load->view('side_user/history', $data);
        } else {
            $this->session->set_flashdata('session_failed', '<script>swal("Login Access", "Anda harus login terlebih dahulu", "info")</script>');
            redirect('errorpage');
        }
    }

    public function canceled()
    {
        if (isset($_REQUEST['sval'])) {
            $res = $this->Trans_model->cancel_reserv();
            if ($res > 0) {
                $this->session->set_flashdata('edit_success', '<script>swal("Cancel", "Reservasi telah dibatalkan", "success")</script>');
            }
            return redirect('history');
        }
    }
}
