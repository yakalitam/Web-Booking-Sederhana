<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Galeri';
        $this->load->view('templates_user/user_galeri', $data);
        $this->load->view('galeri');
        $this->load->view('templates_user/user_footer');
    }
}
