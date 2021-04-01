<?php


class Laporan extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/_temp/header');
        $this->load->view('admin/_temp/sidenav');
        $this->load->view('admin/laporan');
        $this->load->view('admin/_temp/footer');
    }
}
