<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $this->load->model('User_model');
        $data['user'] = $this->User_model->getAllUser();
        $this->load->view('templates/navbar');
        $this->load->view('user', $data);
        $this->load->view('templates/footer');
    }


    public function hapus($id)
    {
        $this->User_model->hapusData($id);
        redirect('user');
    }

    public function ubah($id)
    {
        $data['user'] = $this->User_model->getUserById($id);

        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $jabatan = $this->input->post('jabatan');
        $lokasi = $this->input->post('lokasi');

        if ($nama == null) {
            $this->load->view('templates/navbar');
            $this->load->view('user-edit', $data);
            $this->load->view('templates/footer');
        } else if ($username == null) {
            $this->session->set_flashdata('pesan', 'Username Kosong!');
            $this->load->view('templates/navbar');
            $this->load->view('user-edit', $data);
            $this->load->view('templates/footer');
        } else if ($password == null) {
            $this->session->set_flashdata('pesan', 'Password Kosong!');
            $this->load->view('templates/navbar');
            $this->load->view('user-edit', $data);
            $this->load->view('templates/footer');
        } else if ($lokasi == null) {
            $this->session->set_flashdata('pesan', 'Lokasi Kosong!');
            $this->load->view('templates/navbar');
            $this->load->view('user-edit', $data);
            $this->load->view('templates/footer');
        } else {

            $data = array(
                'nama' => $nama,
                'username' => $username,
                'password' => $password,
                'level' => $jabatan,
                'daerahuser' => $lokasi,
                'role_id' => 2,
                'active' => 1,
            );

            $this->User_model->ubah_data($data, 'user');
            redirect('User/index');
        }
    }
}
