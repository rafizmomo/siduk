<?php

class User_model extends CI_Model
{
    public function userAllShow()
    {
        return $this->db->get('tb_user')->result_array();
    }
    public function userShow($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('username', $keyword);
            $this->db->or_like('nama', $keyword);
            $this->db->or_like('role_id', $keyword);
        }
        return $this->db->get('tb_user', $limit, $start)->result_array();
    }
    public function userCountAll()
    {
        return $this->db->get('tb_user')->num_rows();
    }

    public function userVerification()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[tb_user.username]', [
            'required' => 'Isikan username',
            'is_unique' => 'Username harus telah ada'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Isikan nama'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'required' => 'Isikan password',
            'matches' => 'Password tidak sesuai',
            'min_length' => 'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
            'required' => 'Isikan Ulangi Password',
            'matches' => 'Password ulangi tidak sesuai'

        ]);
        $this->form_validation->set_rules('role_id', 'Role_Id', 'required', [
            'required' => 'Isikan ROLE ID User'
        ]);
    }
    public function userInput()
    {
        $data = [
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'nama' => $this->input->post('nama'),
            'role_id' => $this->input->post('role_id'),
        ];
        $this->db->insert('tb_user', $data);
    }

    public function userDelete($username)
    {
        $this->db->delete('tb_user', ['username' => $username]);
    }

    public function getUserByUsername($username)
    {
        return $this->db->get_where('tb_user', ['username' => $username])->row_array();
    }

    public function userEdit()
    {
        $data = [
            "password" => $this->input->post('password', true),
            "nama" => $this->input->post('nama', true),
            "role_id" => $this->input->post('role_id', true)
        ];
        $this->db->where('username', $this->input->post('username'));
        $this->db->update('tb_user', $data);
    }
    public function userSearch()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('username', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('role_id', $keyword);
        return $this->db->get('tb_user')->result_array();
    }
}
