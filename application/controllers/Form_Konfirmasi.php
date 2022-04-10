<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_Konfirmasi extends CI_Controller
{

    public function index()
    {
        $data['booking'] = $this->db->query("SELECT * FROM tb_booking")->result();
        $judul['judul'] = 'Form Konfirmasi';
        $this->load->view('templates_user/form_header', $judul);
        $this->load->view('panel_admin/form_konfirmasi', $data);
        $this->load->view('templates_user/form_footer');
    }

    public function owner()
    {
        $data['booking'] = $this->db->query("SELECT * FROM tb_booking")->result();
        $judul['judul'] = 'Form Konfirmasi';
        $this->load->view('templates_user/form_header', $judul);
        $this->load->view('panel_owner/form_konfirmasio', $data);
        $this->load->view('templates_user/form_footer');
    }

    public function Pembayaran()
    {
        $data['booking'] = $this->db->query("SELECT * FROM tb_booking")->result();
        $judul['judul'] = 'Form Konfirmasi Pembayaran';
        $this->load->view('templates_user/form_header', $judul);
        $this->load->view('panel_admin/form_pembayaran', $data);
        $this->load->view('templates_user/form_footer');
    }

    public function PembayaranO()
    {
        $data['booking'] = $this->db->query("SELECT * FROM tb_booking")->result();
        $judul['judul'] = 'Form Konfirmasi Pembayaran';
        $this->load->view('templates_user/form_header', $judul);
        $this->load->view('panel_owner/form_pembayaran_o', $data);
        $this->load->view('templates_user/form_footer');
    }

    public function update_booking()
    {
        $id                 =   $this->input->post('id');
        $status_booking     =   $this->input->post('status_booking');

        $data   =   array(
            'status_booking' =>  $status_booking,
        );

        $where  =   array(
            'id'    => $id
        );
        $this->model_booking->update_data('tb_booking', $data, $where);
        redirect('jadwalbookingP');
    }

    public function update_pembayaran()
    {
        $id                 =   $this->input->post('id');
        $status_pembayaran  =   $this->input->post('status_pembayaran');

        $data   =   array(
            'status_pembayaran' =>  $status_pembayaran
        );

        $where  =   array(
            'id'    => $id
        );
        $this->model_booking->update_data($where, 'tb_booking');
        redirect('datapelangganP');
    }
}
