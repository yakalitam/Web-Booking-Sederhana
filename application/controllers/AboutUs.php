<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aboutus extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'About Us';
        $this->load->view('templates_user/user_aboutus', $data);
        $this->load->view('aboutus');
        $this->load->view('templates_user/user_footer');
    }
}
