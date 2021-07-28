<?php

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }

    public function other()
    {
        $this->load->view('templates/header2');
        $this->load->view('pages/other');
        $this->load->view('templates/footer2');
    }
}
