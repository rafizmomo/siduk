<?php

class Duk_model extends CI_Model
{
    public function dukAllShow()
    {
        return $this->db->get('tb_duk')->result_array();
    }
    public function dukShow($limit, $start, $keyword_duk = null)
    {
        if ($keyword_duk) {
            $this->db->like('no', $keyword_duk);
            $this->db->or_like('nama', $keyword_duk);
            $this->db->or_like('nip', $keyword_duk);
            $this->db->or_like('nama_jabatan', $keyword_duk);
            $this->db->or_like('struktur', $keyword_duk);
            $this->db->or_like('jenjang', $keyword_duk);
            $this->db->or_like('universitas', $keyword_duk);
            $this->db->or_like('pangkat_gol_ruang', $keyword_duk);
            $this->db->or_like('eselon', $keyword_duk);
        }
        return $this->db->get('tb_duk', $limit, $start)->result_array();
    }
    public function dukCountAll()
    {
        return $this->db->get('tb_duk')->num_rows();
    }

    public function dukPrint($start, $keyword_duk = null)
    {
        if ($keyword_duk) {
            $this->db->like('no', $keyword_duk);
            $this->db->or_like('nama', $keyword_duk);
            $this->db->or_like('nip', $keyword_duk);
            $this->db->or_like('nama_jabatan', $keyword_duk);
            $this->db->or_like('struktur', $keyword_duk);
            $this->db->or_like('jenjang', $keyword_duk);
            $this->db->or_like('universitas', $keyword_duk);
            $this->db->or_like('pangkat_gol_ruang', $keyword_duk);
            $this->db->or_like('eselon', $keyword_duk);
        }
        return $this->db->get('tb_duk', $start)->result_array();
    }




    public function dukInput()
    {
        $data = [
            'no' => $this->input->post('no'),
            'nip' => $this->input->post('nip'),
            'gelar_depan' => $this->input->post('gelar_depan'),
            'nama' => $this->input->post('nama'),
            'gelar_belakang' => $this->input->post('gelar_belakang'),
            'JK' => $this->input->post('JK'),
            'pangkat_gol_ruang' => $this->input->post('pangkat_gol_ruang'),
            'tmt_pangkat' => $this->input->post('tmt_pangkat'),
            'nama_jabatan' => $this->input->post('nama_jabatan'),
            'eselon' => $this->input->post('eselon'),
            'struktur' => $this->input->post('struktur'),
            'tmt_jabatan' => $this->input->post('tmt_jabatan'),
            'th_sk_terakhir' => $this->input->post('th_sk_terakhir'),
            'bln_sk_terakhir' => $this->input->post('th_sk_terakhir'),
            'th_seluruh' => $this->input->post('th_seluruh'),
            'bln_seluruh' => $this->input->post('bln_seluruh'),
            'jenjang' => $this->input->post('jenjang'),
            'jurusan' => $this->input->post('jurusan'),
            'universitas' => $this->input->post('universitas'),
            'th_lulus' => $this->input->post('th_lulus'),
            'tmt_mutasi' => $this->input->post('tmt_mutasi'),
            'instansi_lama' => $this->input->post('instansi_lama'),
            'pensiun' => $this->input->post('pensiun'),
            'kgb' => $this->input->post('kgb'),
            'pangkat_kenaikan' => $this->input->post('pangkat_kenaikan'),
            'ket' => $this->input->post('ket')

        ];
        $this->db->insert('tb_duk', $data);
    }

    public function dukDelete($no)
    {
        $this->db->delete('tb_duk', ['no' => $no]);
    }

    public function getdukByNo($no)
    {
        return $this->db->get_where('tb_duk', ['no' => $no])->row_array();
    }

    public function dukEdit()
    {
        $data = [
            'no' => $this->input->post('no'),
            'nip' => $this->input->post('nip'),
            'gelar_depan' => $this->input->post('gelar_depan'),
            'nama' => $this->input->post('nama'),
            'gelar_belakang' => $this->input->post('gelar_belakang'),
            'JK' => $this->input->post('JK'),
            'pangkat_gol_ruang' => $this->input->post('pangkat_gol_ruang'),
            'tmt_pangkat' => $this->input->post('tmt_pangkat'),
            'nama_jabatan' => $this->input->post('nama_jabatan'),
            'eselon' => $this->input->post('eselon'),
            'struktur' => $this->input->post('struktur'),
            'tmt_jabatan' => $this->input->post('tmt_jabatan'),
            'th_sk_terakhir' => $this->input->post('th_sk_terakhir'),
            'bln_sk_terakhir' => $this->input->post('th_sk_terakhir'),
            'th_seluruh' => $this->input->post('th_seluruh'),
            'bln_seluruh' => $this->input->post('bln_seluruh'),
            'jenjang' => $this->input->post('jenjang'),
            'jurusan' => $this->input->post('jurusan'),
            'universitas' => $this->input->post('universitas'),
            'th_lulus' => $this->input->post('th_lulus'),
            'tmt_mutasi' => $this->input->post('tmt_mutasi'),
            'instansi_lama' => $this->input->post('instansi_lama'),
            'pensiun' => $this->input->post('pensiun'),
            'kgb' => $this->input->post('kgb'),
            'pangkat_kenaikan' => $this->input->post('pangkat_kenaikan'),
            'ket' => $this->input->post('ket')
        ];
        $this->db->where('no', $this->input->post('no'));
        $this->db->update('tb_duk', $data);
    }
    public function dukSearch()
    {
        $keyword_duk = $this->input->post('keyword_duk');
        $this->db->like('no', $keyword_duk);
        $this->db->or_like('nama', $keyword_duk);
        $this->db->or_like('nip', $keyword_duk);
        $this->db->or_like('nama_jabatan', $keyword_duk);
        $this->db->or_like('struktur', $keyword_duk);
        $this->db->or_like('jenjang', $keyword_duk);
        $this->db->or_like('universitas', $keyword_duk);
        $this->db->or_like('pangkat_gol_ruang', $keyword_duk);
        $this->db->or_like('eselon', $keyword_duk);
        return $this->db->get('tb_duk')->result_array();
    }
}
