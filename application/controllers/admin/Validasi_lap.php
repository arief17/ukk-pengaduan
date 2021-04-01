<?php


class Validasi_lap extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/_temp/header');
        $this->load->view('admin/_temp/sidenav');
        $this->load->view('admin/validasi_lap');
        $this->load->view('admin/_temp/footer');
    }
}
