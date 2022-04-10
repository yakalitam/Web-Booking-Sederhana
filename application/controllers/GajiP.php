<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GajiP extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '<div class="notification is-danger">
            <a href="login" class="delete"></a>
            Anda Belum Login!!!
          </div>');
            redirect('auth/login');
        }
    }

    public function index()
    {
        $id_pegawai =   $this->session->userdata('id_pegawai');
        $data['data_gaji'] =  $this->db->query("SELECT tb_user.id_pegawai,tb_gaji.id_pegawai, tb_user.nama, tb_gaji.tanggal,tb_gaji.jumlah FROM tb_user INNER JOIN tb_gaji ON tb_gaji.id_pegawai = tb_user.id_pegawai WHERE tb_gaji.id_pegawai = '$id_pegawai' ORDER BY tb_gaji.tanggal DESC")->result();
        $data['judul'] = 'Gaji';
        $this->load->view('templates_admin/admin_header', $data);
        $this->load->view('panel_admin/gajiP');
        $this->load->view('templates_admin/admin_footer');
    }
}
