<?php

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('dashboard_utama');
    }
}
