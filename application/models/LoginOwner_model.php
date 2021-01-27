<?php

class LoginOwner_model extends CI_Model
{
    public function check_session()
    {
        return $this->session->userdata('id_kasir');
    }
    public function can_login($email_kasir, $password)
    {

        $this->db->where('email_kasir', $email_kasir);
        $this->db->where('password', $password);
        $query = $this->db->get('kasir');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data = array(
                    'id_kasir' => $row->id_kasir,
                    'nama_kasir' => $row->nama_kasir,
                    'email_kasir' => $row->email_kasir,
                    'password' => $row->password,
                    'notelp_kasir' => $row->notelp_kasir,
                );
            }

            $this->session->set_userdata($data);
            redirect('dash_owner');
        } else {
            $this->session->set_flashdata('info', '<script>swal("Oops", "Email atau Password Cafe Anda Salah!", "error")</script>');
            redirect('auth_loginowner');
        }
    }
}
