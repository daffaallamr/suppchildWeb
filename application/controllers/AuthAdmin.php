<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthAdmin extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules(
            'username',
            'Username',
            'trim|required',
            array(
                'required' => 'Harap Masukkan Username',
            )
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'trim|required',
            array('required' => 'Harap Masukkan Password')
        );
        if ($this->form_validation->run()  == false) {
            $this->load->view('auth/loginadmin');
        } else {
            $this->_loginAdmin();
        }
    }

    private function _loginAdmin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin = $this->db->get_where('admin', ['username' => $username])->row_array();

        if ($admin) {
            if ($password == $admin['password']) {
                $data = [
                    'id' => $admin['id_admin'],
                    'nama' => $admin['nama_admin'],
                    'username' => $admin['username'],
                    'password' => $admin['password'],
                ];
                $this->session->set_userdata('user', $data);
                $this->session->set_userdata('id', $data['id']);
                $this->session->set_userdata('nama', $data['nama']);
                $this->session->set_userdata('username', $data['username']);
                $this->session->set_userdata('password', $data['password']);
                redirect('Home');
            } else {
                $this->session->set_flashdata('pesan', 'Password Anda Salah');
                // REDIRECT NEK LOGIN PAGE ADMIN
                redirect('AuthAdmin/index');
            }
        } else {
            $this->session->set_flashdata('pesan', 'Username Anda Salah');
            // REDIRECT NEK LOGIN PAGE ADMIN
            redirect('AuthAdmin/index');
        }
    }
}
