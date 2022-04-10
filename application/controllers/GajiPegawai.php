<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GajiPegawai extends CI_Controller
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
        $data['data_gaji'] =  $this->db->query("SELECT tb_user.id_pegawai,tb_gaji.id_pegawai, tb_user.nama, tb_gaji.tanggal,tb_gaji.jumlah FROM tb_user INNER JOIN tb_gaji ON tb_gaji.id_pegawai = tb_user.id_pegawai")->result();
        $data['data_gaji_owner']      =   'Data Gaji';
        $this->load->view('templates_owner/owner_header', $data);
        $this->load->view('panel_owner/datagajipegawai');
        $this->load->view('templates_owner/owner_footer');
    }

    public function tambah_gaji()
    {
        $data['profile'] =  $this->db->query("SELECT * FROM tb_user")->result();
        $data['judul_tambah_gaji']      =   'Form Tambah Data Gaji';
        $this->load->view('templates_owner/owner_header', $data);
        $this->load->view('panel_owner/form_gaji', $data);
        $this->load->view('templates_owner/owner_footer');
    }

    public function tambah_gaji_aksi()
    {
        $id_pegawai         =   $this->input->post('id_pegawai');
        $tanggal            =   $this->input->post('tanggal');
        $jumlah             =   $this->input->post('jumlah');

        $data    =   array(
            'id_pegawai'     =>  $id_pegawai,
            'tanggal'   =>  $tanggal,
            'jumlah'    =>  $jumlah,
        );
        $this->model_keuangan->tambah_gaji($data, 'tb_gaji');
        redirect('GajiPegawai');
    }
}
