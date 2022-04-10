<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{
    public function index()
    {

        $data['booking'] = $this->model_booking->tampil_data()->result();
        $judul['judul'] = 'Booking';
        $this->load->view('templates_user/user_booking', $judul);
        $this->load->view('booking', $data);
        $this->load->view('templates_user/user_footer');
    }

    // public function konfirmasi_booking()
    // {
    //     $id                     =   $this->input->post('id');
    //     $status_booking         =   $this->input->post('status_booking');

    //     $data    =   array(
    //         'status_booking'     =>  $status_booking,
    //     );
    //     $where  =   array(
    //         'id_brg'    =>  $id
    //     );
    //     $this->model_booking->update_data($where, $data, 'tb_booking');
    //     redirect('jadwalbookingP');
    // }

    public function tambah_aksi()
    {
        $studio     =   $this->input->post('studio');
        $tanggal    =   $this->input->post('tanggal');
        $jam        =   $this->input->post('jam');
        $nama       =   $this->input->post('nama');
        $no_hp      =   $this->input->post('no_hp');
        $email      =   $this->input->post('email');

        $data    =   array(
            'studio'    =>  $studio,
            'tanggal'   =>  $tanggal,
            'jam'       =>  $jam,
            'nama'      =>  $nama,
            'no_hp'     =>  $no_hp,
            'email'     =>  $email,
        );
        $this->model_booking->tambah_data($data, 'tb_booking');
        redirect('Welcome');
    }
}
