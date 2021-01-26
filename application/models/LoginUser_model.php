<?php

class LoginUser_model extends CI_Model
{

    public function check_session()
    {
        return $this->session->userdata('id_cust');
    }
    public function can_login($email, $pass)
    {

        $this->db->where('email', $email);
        $this->db->where('password', $pass);
        $query = $this->db->get('customer');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data = array(
                    'id_cust' => $row->id_cust,
                    'nama_cust' => $row->nama_cust,
                    'notelp_cust' => $row->notelp_cust,
                    'password' => $row->password,
                    'email' => $row->email,
                );
            }

            $this->session->set_userdata($data);
            redirect('get_product');
        } else {
            $this->session->set_flashdata('info', '<script>swal("Oops", "Nomor Telepon atau Password Anda Salah!", "error")</script>');
            redirect('auth_loginuser');
        }
    }
}
