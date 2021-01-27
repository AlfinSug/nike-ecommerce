<?php

class Get_Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('LoginUser_model');
        $this->load->model('Trans_model');
        $this->load->library('session');
    }
    public function index()
    {
        if ($this->LoginUser_model->check_session()) {
            $data['title'] = 'Shop';
            $data['product_catalog'] = $this->Product_model->getAllProduct();
            $data['list_trans'] = $this->Trans_model->getTrans();
            $this->load->view('utils/header-server', $data);
            $this->load->view('side_user/get_product', $data);
        } else {
            $this->session->set_flashdata('session_failed', '<script>swal("Login Access", "Anda harus login terlebih dahulu", "info")</script>');
            redirect('errorpage');
        }
    }

    public function order_now()
    {
        $this->Trans_model->transaction();
        $this->session->set_flashdata('success', '<script>swal("Reservation", "Reservasi berhasil, tunggu owner sampai mengonfirmasi reservasi anda", "success")</script>');
        redirect('get_product');
    }
}
