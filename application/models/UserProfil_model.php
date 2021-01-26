<?php

class UserProfil_model extends CI_Model
{
    public function getUser()
    {
        return $this->db->get('user_profil')->result_array();
    }

    public function edit_profil_user($id_user, $data)
    {

        $this->db->set($data);
        $this->db->where('id_user', $id_user);
        $this->db->update('user_profil');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
