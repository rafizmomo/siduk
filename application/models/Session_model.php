<?php

class Session_model extends CI_Model
{
    public function sessionLogin()
    {
        return $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    }
}
