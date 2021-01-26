<?php

class About extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'About';
        $this->load->view('utils/about', $data);
    }
}
