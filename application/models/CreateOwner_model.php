<?php

class CreateOwner_model extends CI_Model
{
    public function createOwner()
    {
        // $birthdate = $this->input->post('birthdate', true);
        // $strDate = date('Y-m-d', strtotime($birthdate));
        $data = array(
            "id_cafe" => $this->input->post('id_cafe', true),
            "nama_cafe" => $this->input->post('nama_cafe', true),
            "email_cafe" => $this->input->post('email_cafe', true),
            "pass_cafe" => $this->input->post('pass_cafe', true),
            "notelp_cafe" => $this->input->post('notelp_cafe', true),
            "alamat_cafe" => $this->input->post('alamat_cafe', true),

        );
        $this->db->insert('cafe_profil', $data);
    }
}
