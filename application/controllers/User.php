<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_login();
        $this->load->model('Session_model');
        $this->load->model('Duk_model');
    }

    public function index()
    {
        $data['user'] = $this->Session_model->sessionLogin();

        $judul['judul'] = 'My Profile';
        $this->load->view('templates/header', $judul);
        $this->load->view('templates/sidebar', $judul);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer_db');
        $this->load->view('templates/footer');
    }



    public function duk()

    {

        //config pagination


        //ambil data keyword
        if ($this->input->post('keyword_duk')) {
            $data['keyword_duk'] = $this->input->post('keyword_duk');
            $this->session->set_userdata('keyword_duk', $data['keyword_duk']);
        } else {
            $data['keyword_duk'] = $this->session->userdata('keyword_duk');
        }

        //config
        $this->db->like('no', $data['keyword_duk']);
        $this->db->or_like('nama', $data['keyword_duk']);
        $this->db->or_like('nip', $data['keyword_duk']);
        $this->db->or_like('nama_jabatan', $data['keyword_duk']);
        $this->db->or_like('struktur', $data['keyword_duk']);
        $this->db->or_like('jenjang', $data['keyword_duk']);
        $this->db->or_like('universitas', $data['keyword_duk']);
        $this->db->or_like('pangkat_gol_ruang', $data['keyword_duk']);
        $this->db->or_like('eselon', $data['keyword_duk']);
        $this->db->from('tb_duk');

        $config['base_url'] = 'http://localhost/siduk/admin/duk_menu';
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;

        //initiaze

        $this->pagination->initialize($config);


        $data['user'] = $this->Session_model->sessionLogin();
        $data['start'] = $this->uri->segment(3);
        $data['duk_show'] = $this->Duk_model->dukShow($config['per_page'], $data['start'], $data['keyword_duk']);

        $judul['judul'] = 'Menu duk';
        $this->load->view('templates/header', $judul);
        $this->load->view('templates/sidebar', $judul);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/duk', $data);
        $this->load->view('templates/footer_db');
        $this->load->view('templates/footer');
    }

    public function export_excel()
    {

        $data['dukAllShow'] = $this->Duk_model->dukAllShow();
        require(APPPATH . 'PHPExcel/Classes/PHPExcel.php');
        require(APPPATH . 'PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getProperties()->setCreator('Dinas Komunikasi, Informatika dan Persandian Kab. Bireuen');
        $objPHPExcel->getProperties()->getLastModifiedBy('Dinas Komunikasi, Informatika dan Persandian Kab. Bireuen');
        $objPHPExcel->getProperties()->setSubject();
        $objPHPExcel->getProperties()->setDescription();

        $objPHPExcel->setActiveSheetIndex(0);

        $styleArray = array(
            'font'  => array(
                'bold'  => true,
                'color' => array('rgb' => '000000'),
                'size'  => 12,
                'name'  => 'Times NeW Roman'
            )
        );

        $objPHPExcel->getActiveSheet()->getCell('A1')->setValue('Data Urut Kepangkatan');
        $objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($styleArray);

        $objPHPExcel->getActiveSheet()->setCellValue('A2', 'Pada Unit Kerja');
        $objPHPExcel->getActiveSheet()->setCellValue('C2', 'Dinas Komunikasi, Informatika dan Persandian Kab. Bireuen');
        $objPHPExcel->getActiveSheet()->setCellValue('A4', 'No');
        $objPHPExcel->getActiveSheet()->setCellValue('B4', 'NIP');
        $objPHPExcel->getActiveSheet()->setCellValue('C4', 'Gelar Depan');
        $objPHPExcel->getActiveSheet()->setCellValue('D4', 'Nama');
        $objPHPExcel->getActiveSheet()->setCellValue('E4', 'Gelar Belakang');
        $objPHPExcel->getActiveSheet()->setCellValue('F4', 'Jenis Kelamin');
        $objPHPExcel->getActiveSheet()->setCellValue('G4', 'Pangkat/Gol Ruang');
        $objPHPExcel->getActiveSheet()->setCellValue('H4', 'TMT Pangkat');
        $objPHPExcel->getActiveSheet()->setCellValue('I4', 'Nama Jabatan');
        $objPHPExcel->getActiveSheet()->setCellValue('J4', 'Eselon Jabatan');
        $objPHPExcel->getActiveSheet()->setCellValue('K4', 'Struktur / Fungsi Umum');
        $objPHPExcel->getActiveSheet()->setCellValue('L4', 'TMT Jabatan');
        $objPHPExcel->getActiveSheet()->setCellValue('M4', 'Tahun SK Terakhir');
        $objPHPExcel->getActiveSheet()->setCellValue('N4', 'Bulan SK Terakhir');
        $objPHPExcel->getActiveSheet()->setCellValue('O4', 'Tahun Masa Kerja');
        $objPHPExcel->getActiveSheet()->setCellValue('P4', 'Bulan Masa Kerja');
        $objPHPExcel->getActiveSheet()->setCellValue('Q4', 'Jenjang/Sederajat');
        $objPHPExcel->getActiveSheet()->setCellValue('E4', 'Jurusan');
        $objPHPExcel->getActiveSheet()->setCellValue('S4', 'Sekolah / Universitas');
        $objPHPExcel->getActiveSheet()->setCellValue('T4', 'Tahun Lulus');
        $objPHPExcel->getActiveSheet()->setCellValue('U4', 'TMT Mutasi');
        $objPHPExcel->getActiveSheet()->setCellValue('V4', 'Instansi Lama');
        $objPHPExcel->getActiveSheet()->setCellValue('W4', 'Pensiun');
        $objPHPExcel->getActiveSheet()->setCellValue('X4', 'KGB');
        $objPHPExcel->getActiveSheet()->setCellValue('Y4', 'Kenaikan Pangkat');
        $objPHPExcel->getActiveSheet()->setCellValue('Z4', 'Keterangan');

        $baris = 5;

        foreach ($data['dukAllShow'] as $data) {
            $objPHPExcel->getActiveSheet()->setCellValue('A' . $baris, $data['no']);
            $objPHPExcel->getActiveSheet()->setCellValue('B' . $baris, $data['nip']);
            $objPHPExcel->getActiveSheet()->setCellValue('C' . $baris, $data['gelar_depan']);
            $objPHPExcel->getActiveSheet()->setCellValue('D' . $baris, $data['nama']);
            $objPHPExcel->getActiveSheet()->setCellValue('E' . $baris, $data['gelar_belakang']);
            $objPHPExcel->getActiveSheet()->setCellValue('F' . $baris, $data['JK']);
            $objPHPExcel->getActiveSheet()->setCellValue('G' . $baris, $data['pangkat_gol_ruang']);
            $objPHPExcel->getActiveSheet()->setCellValue('H' . $baris, $data['tmt_pangkat']);
            $objPHPExcel->getActiveSheet()->setCellValue('I' . $baris, $data['nama_jabatan']);
            $objPHPExcel->getActiveSheet()->setCellValue('J' . $baris, $data['eselon']);
            $objPHPExcel->getActiveSheet()->setCellValue('K' . $baris, $data['struktur']);
            $objPHPExcel->getActiveSheet()->setCellValue('L' . $baris, $data['tmt_jabatan']);
            $objPHPExcel->getActiveSheet()->setCellValue('M' . $baris, $data['th_sk_terakhir']);
            $objPHPExcel->getActiveSheet()->setCellValue('N' . $baris, $data['bln_sk_terakhir']);
            $objPHPExcel->getActiveSheet()->setCellValue('O' . $baris, $data['th_seluruh']);
            $objPHPExcel->getActiveSheet()->setCellValue('P' . $baris, $data['bln_seluruh']);
            $objPHPExcel->getActiveSheet()->setCellValue('Q' . $baris, $data['jenjang']);
            $objPHPExcel->getActiveSheet()->setCellValue('R' . $baris, $data['jurusan']);
            $objPHPExcel->getActiveSheet()->setCellValue('S' . $baris, $data['universitas']);
            $objPHPExcel->getActiveSheet()->setCellValue('T' . $baris, $data['th_lulus']);
            $objPHPExcel->getActiveSheet()->setCellValue('U' . $baris, $data['tmt_mutasi']);
            $objPHPExcel->getActiveSheet()->setCellValue('V' . $baris, $data['instansi_lama']);
            $objPHPExcel->getActiveSheet()->setCellValue('W' . $baris, $data['pensiun']);
            $objPHPExcel->getActiveSheet()->setCellValue('X' . $baris, $data['kgb']);
            $objPHPExcel->getActiveSheet()->setCellValue('Y' . $baris, $data['pangkat_kenaikan']);
            $objPHPExcel->getActiveSheet()->setCellValue('Z' . $baris, $data['ket']);

            $baris++;
        }
        $filename = 'Data Urut Kepangkatan' . date('d-m-y') . 'xlsx';
        $objPHPExcel->getActiveSheet()->setTitle('Data Urut Kepangkatan');

        header('Content-type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');

        exit;
    }
}
