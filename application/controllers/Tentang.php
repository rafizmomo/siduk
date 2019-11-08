<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{
    public function index()
    {
        $judul['judul'] = 'Tentang';
        $this->load->view('templates/header', $judul);
        $this->load->view('navbar/logo');
        $this->load->view('navbar/menu', $judul);
        $this->load->view('navbar/closetag');
        $this->load->view('tentang/index');
        $this->load->view('templates/footer');
    }
}
