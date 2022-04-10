<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AkunP extends CI_Controller
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
        $id              =   $this->session->userdata('id_pegawai');
        $data['profile'] = $this->db->query("SELECT * FROM tb_user WHERE id_pegawai = '$id'")->result();
        $data['judul'] = 'Akun';
        $this->load->view('templates_admin/admin_header', $data);
        $this->load->view('panel_admin/akunP');
        $this->load->view('templates_admin/admin_footer');
    }
    public function GantiPassword()
    {
        $passBaru   =   $this->input->post('passBaru');
        $ulangPass  =   $this->input->post('ulangPass');

        $this->form_validation->set_rules('passBaru', 'Password Baru', 'required|matches[ulangPass]');
        $this->form_validation->set_rules('ulangPass', 'Konfirmasi Password', 'required');

        if ($this->form_validation->run() != FALSE) {
            $data   =   array('password'    => $passBaru);
            $id     =   array('id_pegawai'  =>  $this->session->userdata('id_pegawai'));

            $this->model_booking->update_data('tb_user', $data, $id);
            $this->session->set_flashdata('pesan', '<div class="notification is-success">
            <a href="login" class="delete"></a>
            <strong>Password Berhasil Diubah!</strong>
            </div>');
            redirect('auth/login');
        } else {
            $id              =   $this->session->userdata('id_pegawai');
            $data['profile'] = $this->db->query("SELECT * FROM tb_user WHERE id_pegawai = '$id'")->result();
            $data['judul'] = 'Akun';
            $this->load->view('templates_admin/admin_header', $data);
            $this->load->view('panel_admin/akunP');
            $this->load->view('templates_admin/admin_footer');
        }
    }
}
