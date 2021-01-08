<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserAdd extends CI_Controller
{
    public function tambahAdmin()
    {

        $this->load->view('templates/navbar');
        $this->load->view('templates/footer');

        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($nama == null) {
            $this->load->view('user-tambahadmin');
        } else if ($username == null) {
            $this->session->set_flashdata('pesan', 'Username Kosong!');
            $this->load->view('user-tambahadmin');
        } else if ($password == null) {
            $this->session->set_flashdata('pesan', 'Password Kosong!');
            $this->load->view('user-tambahadmin');
        } else {
            $this->tambah_admin();
        }
    }

    public function tambah_admin()
    {

        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = array(
            'nama_admin' => $nama,
            'username' => $username,
            'password' => $password,
        );
        $this->User_model->input_dataAdmin($data, 'admin');
        redirect('User/userAdmin');
    }

    public function tambahPusat()
    {

        $this->load->view('templates/navbar');
        $this->load->view('templates/footer');

        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($nama == null) {
            $this->load->view('user-tambahpusat');
        } else if ($username == null) {
            $this->session->set_flashdata('pesan', 'Username Kosong!');
            $this->load->view('user-tambahpusat');
        } else if ($password == null) {
            $this->session->set_flashdata('pesan', 'Password Kosong!');
            $this->load->view('user-tambahpusat');
        } else {
            $this->tambah_pusat();
        }
    }

    public function tambah_pusat()
    {

        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = array(
            'nama_staffpusat' => $nama,
            'username' => $username,
            'password' => $password,
        );
        $this->User_model->input_dataPusat($data, 'staff_pusat');
        redirect('User/userPusat');
    }


    public function tambahDaerah()
    {

        $this->load->view('templates/navbar');
        $this->load->view('templates/footer');

        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $daerah = $this->input->post('daerah');

        if ($nama == null) {
            $this->load->view('user-tambahdaerah');
        } else if ($username == null) {
            $this->session->set_flashdata('pesan', 'Username Kosong!');
            $this->load->view('user-tambahdaerah');
        } else if ($password == null) {
            $this->session->set_flashdata('pesan', 'Password Kosong!');
            $this->load->view('user-tambahdaerah');
        } else {
            $this->tambah_daerah();
        }
    }

    public function tambah_daerah()
    {

        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $daerah = $this->input->post('daerah');

        $data = array(
            'nama_staffdaerah' => $nama,
            'username' => $username,
            'password' => $password,
            'id_daerah' => $daerah,
        );
        $this->User_model->input_dataDaerah($data, 'user');
        redirect('User/userDaerah');
    }
}
