<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jadwalbookingP extends CI_Controller
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
        //pagination
        $config['base_url']         =   'http://localhost/aaprostudio/jadwalbookingP/index';
        $config['total_rows']       =   $this->model_booking->countAllPeoples();
        $config['per_page']         =   5;
        $config['num_links']        =   3;

        //Styling
        $config['full_tag_open']    =   '<nav class="pagination is-centered is-rounded mb-3" role="navigation"><ul class="pagination-list">';
        $config['full_tag_close']   =   '</ul></nav>';

        $config['first_link']       =   'First';
        $config['first_tag_open']   =   '<li>';
        $config['first_tag_close']  =   '</li>';

        $config['last_link']        =   'Last';
        $config['last_tag_open']    =   '<li>';
        $config['last_tag_close']   =   '</li>';

        $config['next_link']        =   '&raquo';
        $config['next_tag_open']    =   '<li>';
        $config['next_tag_close']   =   '</li>';

        $config['prev_link']        =   '&laquo';
        $config['prev_tag_open']    =   '<li>';
        $config['prev_tag_close']   =   '</li>';

        $config['cur_tag_open']     =   '<li class="active">';
        $config['cur_tag_close']    =   '</li>';

        $config['cur_tag_open']     =   '<li class="">';
        $config['cur_tag_close']    =   '</li>';

        $config['attributes']       =   array('class' => 'pagination-link');

        //initialize
        $this->pagination->initialize($config);

        $data['start']      = $this->uri->segment(3);
        $data['booking']    = $this->model_booking->ambil_data($config['per_page'], $data['start']);

        $judul['judul'] = 'Data Booking';
        $this->load->view('templates_admin/admin_header', $judul);
        $this->load->view('panel_admin/jadwalbookingP', $data);
        $this->load->view('templates_admin/admin_footer');
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

    public function hapus($id)
    {
        $where  =   array('id' => $id);
        $this->model_booking->hapus_data($where, 'tb_booking');
        redirect('jadwalbookingP');
    }
}
