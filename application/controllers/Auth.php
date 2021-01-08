<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
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
            $this->load->view('auth/login');
        } else {
            $this->_loginPusat();
        }
    }

    private function _loginPusat()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $pusat = $this->db->get_where('staff_pusat', ['username' => $username])->row_array();

        if ($pusat) {
            if ($password == $pusat['password']) {
                $data = [
                    'id' => $pusat['id_staffpusat'],
                    'nama' => $pusat['nama_staffpusat'],
                    'username' => $pusat['username'],
                    'password' => $pusat['password'],
                ];
                $this->session->set_userdata('user', $data);
                $this->session->set_userdata('id', $data['id']);
                $this->session->set_userdata('nama', $data['nama']);
                $this->session->set_userdata('username', $data['username']);
                $this->session->set_userdata('password', $data['password']);
                redirect('Home_staff');
            } else {
                $this->session->set_flashdata('pesan', 'Password Anda Salah');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', 'Username Anda Salah');
            redirect('auth');
        }
    }
}
