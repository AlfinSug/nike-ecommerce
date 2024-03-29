<?php

class Trans_model extends CI_Model
{
    public function getTrans()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('customer', 'transaksi.id_cust = customer.id_cust');
        $this->db->join('produk', 'transaksi.kode_produk = produk.kode_produk');
        return $this->db->get()->result_array();
    }

    public function getTotalReservasi()
    {
        return $this->db->query('select count(id_trx) as total_reserv from transaksi')->result_array();
    }

    public function getCountAccReserv($id_cafe)
    {
        $id_cafe = $this->session->userdata('id_cafe');
        return $this->db->query('select count(id_reserv) as acc_reserv from reservation where status_reserv = 1 and id_cafe=' . $id_cafe)->result_array();
    }

    public function getCountRefuseReserv($id_cafe)
    {
        $id_cafe = $this->session->userdata('id_cafe');
        return $this->db->query('select count(id_reserv) as ref_reserv from reservation where status_reserv = 2 and id_cafe=' . $id_cafe)->result_array();
    }

    public function getCountCancelReserv($id_cafe)
    {
        $id_cafe = $this->session->userdata('id_cafe');
        return $this->db->query('select count(id_reserv) as cancel_reserv from reservation where status_reserv = 3 and id_cafe=' . $id_cafe)->result_array();
    }

    public function getCountAccReservUser($id_user)
    {
        $id_user = $this->session->userdata('id_user');
        return $this->db->query('select count(id_reserv) as acc_reserv from reservation where status_reserv = 1 and id_user=' . $id_user)->result_array();
    }

    public function getCountRefuseReservUser($id_user)
    {
        $id_user = $this->session->userdata('id_user');
        return $this->db->query('select count(id_reserv) as ref_reserv from reservation where status_reserv = 2 and id_user=' . $id_user)->result_array();
    }

    public function getCountCancelReservUser($id_user)
    {
        $id_user = $this->session->userdata('id_user');
        return $this->db->query('select count(id_reserv) as cancel_reserv from reservation where status_reserv = 3 and id_user=' . $id_user)->result_array();
    }
    public function transaction()
    {
        $img_bukti = $_FILES['bukti_pembayaran']['name'];

        if ($img_bukti == "") {
        } else {
            $config['upload_path'] = './asset/img_payment/';
            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('bukti_pembayaran')) {
                $this->session->set_flashdata('file_failed', '<script>swal("Format File", "Format gambar yang diperbolehkan adalah .jpg/.png", "error")</script>');
                redirect('get_product');
            } else {
                $img_bukti = $this->upload->data('file_name');
            }
        }
        $data = array(

            'id_trx' => $this->input->post('id_trx', true),
            'id_cust' => $this->input->post('id_cust', true),
            'kode_produk' => $this->input->post('kode_produk', true),
            'jml_beli' => $this->input->post('jml_beli', true),
            'sizes' => $this->input->post('sizes', true),
            'total_bayar' => $this->input->post('total_bayar', true),
            'bukti_pembayaran' => $img_bukti,

        );
        $this->db->insert('transaksi', $data);
    }

    public function cancel_reserv()
    {
        $id_reserv = $_REQUEST['id_reserv'];
        $saval = $_REQUEST['sval'];

        if ($saval == 0) {
            $status = 3;
        } else {
            $status = 0;
        }
        $data = array(
            "status_trans" => $status
        );
        $this->db->where('id_trx', $id_reserv);
        return $this->db->update('transaksi', $data);
    }

    public function acc_reserv()
    {
        $id_trans = $_REQUEST['id_trx'];
        $saval = $_REQUEST['sval'];

        if ($saval == 0) {
            $status = 1;
        } else {
            $status = 0;
        }
        $data = array(
            "status_trans" => $status
        );
        $this->db->where('id_trx', $id_trans);
        return $this->db->update('transaksi', $data);
    }

    public function refuse_reserv()
    {
        $id_trans = $_REQUEST['id_trans'];
        $saval = $_REQUEST['sval'];

        if ($saval == 0) {
            $status = 2;
        } else {
            $status = 0;
        }
        $data = array(
            "note_tolak" => $this->input->post('note_tolak', true),
            "status_trans" => $status
        );
        $this->db->where('id_trx', $id_trans);
        return $this->db->update('transaksi', $data);
    }
}
