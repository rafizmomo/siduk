<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $judul['judul'] = 'Halaman Awal';
        $this->load->view('templates/header', $judul);
        $this->load->view('navbar/logo');
        $this->load->view('navbar/menu', $judul);
        $this->load->view('navbar/closetag');
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}
