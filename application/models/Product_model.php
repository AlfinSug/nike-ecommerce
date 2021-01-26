<?php

class Product_model extends CI_Model
{
    public function getAllProduct()
    {
        return $this->db->get('produk')->result_array();
    }

    public function getCafeRecommended()
    {
        $sql = $this->db->query('SELECT * FROM produk LIMIT 0, 4');
        return $sql->result_array();
    }

    public function edit_profil_owner($id_pro, $data)
    {

        $this->db->set($data);
        $this->db->where('id_pro', $id_pro);
        $this->db->update('produk');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
