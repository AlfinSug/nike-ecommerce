<?php

class Product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('Trans_model');
        $this->load->model('LoginAdmin_model');
        $this->load->library('session');
    }
    public function index()
    {
        if ($this->LoginOwner_model->check_session()) {
            $id_cafe = $this->session->userdata('id_cafe');
            $data['title'] = 'Cafe Profil';
            $data['list_reserv'] = $this->Reserv_model->getReservUser();
            $data['acc_reserv'] = $this->Reserv_model->getCountAccReserv($id_cafe);
            $data['refuse_reserv'] = $this->Reserv_model->getCountRefuseReserv($id_cafe);
            $data['cancel_reserv'] = $this->Reserv_model->getCountCancelReserv($id_cafe);
            // $data['kode_akses'] = $this->CafeProfil_model->open_cafe();
            $this->load->view('utils/header-owner', $data);
            $this->load->view('side_owner/cafe_profil', $data);
        } else {
            $this->session->set_flashdata('session_failed', '<script>swal("Login Access", "Anda harus login terlebih dahulu", "info")</script>');
            redirect('errorpage');
        }
    }


    public function edit_profils()
    {
        $data = array(
            "id_cafe" => $this->input->post('id_cafe', true),
            "nama_cafe" => $this->input->post('nama_cafe', true),
            "email_cafe" => $this->input->post('email_cafe', true),
            "notelp_cafe" => $this->input->post('notelp_cafe', true),
            "alamat_cafe" => $this->input->post('alamat_cafe', true),
            "url_maps" => $this->input->post('url_maps', true),
            "sosmed" => $this->input->post('sosmed', true),
            "jam_buka" => $this->input->post('jam_buka', true),
            "akses_cafe" => $this->input->post('akses_cafe', true),
        );

        $result = $this->CafeProfil_model->edit_profil_owner($this->session->userdata('id_cafe'), $data);

        if ($result > 0) {
            $session_data = array(
                'id_cafe' => $data['id_cafe'],
                'nama_cafe' => $data['nama_cafe'],
                'notelp_cafe' => $data['notelp_cafe'],
                'pass_cafe' => $data['pass_cafe'],
                'email_cafe' => $data['email_cafe'],
                'sosmed' => $data['sosmed'],
                'jam_buka' => $data['jam_buka'],
                'url_maps' => $data['url_maps'],
                'alamat_cafe' => $data['alamat_cafe'],
                'akses_cafe' => $data['akses_cafe'],
            );
            $this->session->set_userdata($session_data);
            $this->session->set_flashdata('edit_success', '<script>swal("Data Change", "Profil anda telah berhasil diubah", "success")</script>');
            redirect('cafe_profil');
        } else {
            $this->session->set_flashdata('edit_failed', '<script>swal("Data Change", "Profil anda telah berhasil diubah", "success")</script>');
            redirect('cafe_profil');
        }
    }
}
