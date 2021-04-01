<?php


class Data_user extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/_temp/header');
        $this->load->view('admin/_temp/sidenav');
        $this->load->view('admin/data_user');
        $this->load->view('admin/_temp/footer');
    }
}
