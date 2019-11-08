<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {

            $judul['judul'] = 'Login';
            $this->load->view('templates/header', $judul);
            $this->load->view('navbar/logo');
            $this->load->view('navbar/menu', $judul);
            $this->load->view('navbar/closetag');
            $this->load->view('auth/login');
            $this->load->view('templates/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_user', ['username' => $username])->row_array();

        //user ada
        if ($user) {
            //user aktif
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                if ($user['role_id'] == 1) {
                    redirect('user');
                } else {
                    redirect('user');
                }
                redirect('user');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Password salah</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Username tidak tersedia!</div>');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Anda berhasil Logout</div>');
        redirect('auth');
    }

    public function blocked()
    {
        $judul['judul'] = 'Edit User';
        $this->load->view('templates/header', $judul);
        $this->load->view('auth/blocked');
        $this->load->view('templates/footer_db');
        $this->load->view('templates/footer');
    }
}
