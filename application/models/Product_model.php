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

    public function getFilterProduct($harga)
    {
        return $this->db->query('select * from produk where harga=' . $harga)->result_array();
    }

    public function getSearch($keyword)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('harga', $keyword);
        // $this->db->or_like('tipe_produk', $keyword);
        return $this->db->get()->result();
    }

    public function getBestSeller()
    {
        return $this->db->query('select * from produk where harga between 1500000 and 2500000')->result_array();
    }

    public function getTotalProduct()
    {
        return $this->db->query('select count(kode_produk) as total_all from produk;')->result_array();
    }
    public function getTotalMen()
    {
        $men = 'Mens Shoe';
        return $this->db->query('select count(kode_produk) as total_men from produk where tipe_produk like ' . $men)->result_array();
    }
    public function getTotalBest()
    {
        return $this->db->query('select count(kode_produk) as total_best from produk where harga between 1500000 and 2500000')->result_array();
    }

    public function getMens()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('tipe_produk', 'Mens Shoe');
        return $this->db->get()->result_array();
    }

    public function getWomens()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('tipe_produk', 'Womens Shoe');
        return $this->db->get()->result_array();
    }

    public function getKids()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('tipe_produk', 'Younger Kids Shoe');
        return $this->db->get()->result_array();
    }
}
