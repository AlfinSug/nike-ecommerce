<?php

class Profil_User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserProfil_model');
        $this->load->model('Reserv_model');
        $this->load->model('LoginUser_model');
        $this->load->library('session');
    }

    public function index()
    {
        if ($this->LoginUser_model->check_session()) {
            $id_user = $this->session->userdata('id_user');
            $data['title'] = 'Profil User';
            $data['list_reserv'] = $this->Reserv_model->getReservUser();
            $data['acc_reserv_user'] = $this->Reserv_model->getCountAccReservUser($id_user);
            $data['refuse_reserv_user'] = $this->Reserv_model->getCountRefuseReservUser($id_user);
            $data['cancel_reserv_user'] = $this->Reserv_model->getCountCancelReservUser($id_user);
            $this->load->view('utils/header-server', $data);
            $this->load->view('side_user/profil_user');
        } else {
            $this->session->set_flashdata('session_failed', '<script>swal("Login Access", "Anda harus login terlebih dahulu", "info")</script>');
            redirect('errorpage');
        }
    }

    public function edit_profil()
    {
        // $img_user = $_FILES['img_user']['name'];

        // if ($img_user == "") {
        // } else {
        //     $config['upload_path'] = './asset/img_user';
        //     $config['allowed_types'] = 'jpg|png';

        //     $this->load->library('upload', $config);
        //     if (!$this->upload->do_upload('img_user')) {
        //         $this->session->set_flashdata('file_failed', '<script>swal("Format File", "Format gambar yang diperbolehkan adalah .jpg/.png", "error")</script>');
        //         redirect('profil_user');
        //     } else {
        //         $img_user = $this->upload->data('file_name');
        //     }
        // }
        $data = array(
            "id_user" => $this->input->post('id_user', true),
            "nama_user" => $this->input->post('nama_user', true),
            "email_user" => $this->input->post('email_user', true),
            "notelp_user" => $this->input->post('notelp_user', true),
            "alamat_user" => $this->input->post('alamat_user', true),
            "bio" => $this->input->post('bio', true),
            // "img_user" => $img_user,
        );

        $result = $this->UserProfil_model->edit_profil_user($this->session->userdata('id_user'), $data);

        if ($result > 0) {
            $session_data = array(
                'id_user' => $data['id_user'],
                'nama_user' => $data['nama_user'],
                'notelp_user' => $data['notelp_user'],
                'pass_user' => $data['pass_user'],
                'email_user' => $data['email_user'],
                'bio' => $data['bio'],
                'alamat_user' => $data['alamat_user'],
                // 'img_user' => $data['img_user'],
            );
            $this->session->set_userdata($session_data);
            $this->session->set_flashdata('edit_success', '<script>swal("Data Change", "Profil anda telah berhasil diubah", "success")</script>');
            redirect('profil_user');
        } else {
            $this->session->set_flashdata('edit_failed', '<script>swal("Data Change", "Profil anda telah berhasil diubah", "success")</script>');
            redirect('profil_user');
        }
    }
}
