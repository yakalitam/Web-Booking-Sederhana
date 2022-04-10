<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
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
        $config['base_url']         =   'http://localhost/aaprostudio/akun/index';
        $config['total_rows']       =   $this->model_booking->countAllProfiles();
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
        $data['profileuser']    = $this->model_booking->ambil_profile($config['per_page'], $data['start']);

        $id              =  $this->session->userdata('id_pegawai');
        $data['profile'] =  $this->db->query("SELECT * FROM tb_user WHERE id_pegawai = '$id'")->result();

        $data['judul'] = 'Data Akun';
        $this->load->view('templates_owner/owner_header', $data);
        $this->load->view('panel_owner/akun');
        $this->load->view('templates_owner/owner_footer');
    }

    public function tambah_akun()
    {
        $data['judul'] = 'Tambah Data Akun';
        $this->load->view('templates_owner/owner_header', $data);
        $this->load->view('panel_owner/tambah_akun');
        $this->load->view('templates_owner/owner_footer');
    }

    public function edit_akun($id)
    {
        $where  =   array('id_pegawai'  => $id);
        $data['pegawai'] =   $this->model_pegawai->edit_data($where, 'tb_user')->result();

        $data['judul'] = 'Tambah Data Akun';
        $this->load->view('templates_owner/owner_header', $data);
        $this->load->view('panel_owner/update_akun');
        $this->load->view('templates_owner/owner_footer');
    }

    public function tambah_akun_aksi()
    {
        $role_id    =   $this->input->post('role_id');
        $nama       =   $this->input->post('nama');
        $username   =   $this->input->post('username');
        $password   =   $this->input->post('password');
        $no_hp      =   $this->input->post('no_hp');
        $email      =   $this->input->post('email');

        $data    =   array(
            'role_id'   =>  $role_id,
            'nama'      =>  $nama,
            'username'  =>  $username,
            'password'  =>  $password,
            'no_hp'     =>  $no_hp,
            'email'     =>  $email,
        );
        $this->model_pegawai->tambah_data($data, 'tb_user');
        redirect('Akun');
    }

    public function update_akun_aksi()
    {
        $id         =   $this->input->post('id_pegawai');
        $nama       =   $this->input->post('nama');
        $no_hp      =   $this->input->post('no_hp');
        $email      =   $this->input->post('email');
        $username   =   $this->input->post('username');
        $password   =   $this->input->post('password');

        $data   =   array(
            'nama'      =>  $nama,
            'no_hp'     =>  $no_hp,
            'email'     =>  $email,
            'username'  =>  $username,
            'password'  =>  $password,
        );

        $where  =   array(
            'id_pegawai'    => $id
        );

        $this->model_pegawai->update_data($where, $data, 'tb_user');
        redirect('Akun');
    }

    public function hapus($id)
    {
        $where  =   array('id_pegawai' => $id);
        $this->model_booking->hapus_data($where, 'tb_user');
        redirect('Akun');
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
            //pagination
            $config['base_url']         =   'http://localhost/aaprostudio/akun/index';
            $config['total_rows']       =   $this->model_booking->countAllProfiles();
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
            $data['profileuser']    = $this->model_booking->ambil_profile($config['per_page'], $data['start']);

            $id              =  $this->session->userdata('id_pegawai');
            $data['profile'] =  $this->db->query("SELECT * FROM tb_user WHERE id_pegawai = '$id'")->result();

            $data['judul'] = 'Data Akun';
            $this->load->view('templates_owner/owner_header', $data);
            $this->load->view('panel_owner/akun');
            $this->load->view('templates_owner/owner_footer');
        }
    }
}
