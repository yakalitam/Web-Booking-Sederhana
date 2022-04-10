<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keuangan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="notification is-danger">
            <a href="login" class="delete"></a>
            Anda Belum Login!!!
          </div>');
            redirect('auth/login');
        }
    }

    public function index()
    {
        if ((isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')) {
            $bulan  =   $_GET['bulan'];
            $tahun  =   $_GET['tahun'];
            $bulantahun = $bulan . $tahun;
        } else {
            $bulan  =   date('m');
            $tahun  =   date('Y');
            $bulantahun =   $bulan . $tahun;
        }
        $data['keuangan']   =   $this->db->query("SELECT * FROM tb_keuangan WHERE tb_keuangan.tanggal='$bulantahun' ORDER BY tb_keuangan.id ASC")->result();
        $this->load->view('templates_owner/owner_header', $data);
        $this->load->view('panel_owner/datakeuangan', $data);
        $this->load->view('templates_owner/owner_footer');
    }

    public function tambah_data_keuangan()
    {
        $data['judul']      =   'Form Input Data Keuangan';
        $this->load->view('templates_owner/owner_header', $data);
        $this->load->view('panel_owner/form_tkeuangan');
        $this->load->view('templates_owner/owner_footer');
    }

    public function tambah_data_aksi()
    {
        $jenis          =   $this->input->post('jenis');
        $nama_invoice   =   $this->input->post('nama_invoice');
        $tanggal        =   $this->input->post('tanggal');
        $jumlah         =   $this->input->post('jumlah');

        $data    =   array(
            'jenis'     =>  $jenis,
            'nama_invoice'  => $nama_invoice,
            'tanggal'   =>  $tanggal,
            'jumlah'    =>  $jumlah
        );
        $this->model_keuangan->tambah_data($data, 'tb_keuangan');
        redirect('keuangan');
    }

    public function hapus($id)
    {
        $where  =   array('id' => $id);
        $this->model_keuangan->hapus_data($where, 'tb_keuangan');
        redirect('keuangan');
    }
}
