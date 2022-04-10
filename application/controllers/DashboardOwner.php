<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardOwner extends CI_Controller
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
        //pagination
        $config['base_url']         =   'http://localhost/aaprostudio/dashboardowner/index';
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

        $data['judul'] = 'Dashboard Owner';
        $this->load->view('templates_owner/owner_header', $data);
        $this->load->view('dashboardowner');
        $this->load->view('templates_owner/owner_footer');
    }
}
