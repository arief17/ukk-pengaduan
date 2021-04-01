<?php

class Dashboard_admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/_temp/header');
        $this->load->view('admin/_temp/sidenav');
        $this->load->view('admin/dashboard_admin');
        $this->load->view('admin/_temp/footer');
    }
}
