<?php

class Auth extends CI_Controller
{

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username Wajib Diisi!']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password Wajib Diisi!']);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_user/admin_login');
            $this->load->view('login');
        } else {
            $auth = $this->model_auth->cek_login();
            if ($auth == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="notification is-danger">
                <a href="login" class="delete"></a>
                username atau password anda salah !!!
                </div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('role_id', $auth->role_id);
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('id_pegawai', $auth->id_pegawai);

                switch ($auth->role_id) {
                    case 1:
                        redirect('dashboardowner');
                        break;
                    case 2:
                        redirect('dashboardadmin');
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('welcome');
    }
}
