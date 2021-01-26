<?php

class CreateUser_model extends CI_Model
{

    public function createUser()
    {
        // $birthdate = $this->input->post('birthdate', true);
        // $strDate = date('Y-m-d', strtotime($birthdate));
        $data = array(
            "id_cust" => $this->input->post('id_cust', true),
            "nama_cust" => $this->input->post('nama_cust', true),
            "email" => $this->input->post('email', true),
            "password" => $this->input->post('password', true),
            "notelp_cust" => $this->input->post('notelp_cust', true),

        );
        $this->db->insert('customer', $data);
    }
}
