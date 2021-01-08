<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {

        $this->load->view('templates/navbar');
        $this->load->view('user-home');
        $this->load->view('templates/footer');
    }

    public function userAdmin()
    {
        $this->load->model('User_model');
        $data['user'] = $this->User_model->getAllAdmin();
        $this->load->view('templates/navbar');
        $this->load->view('user-admin', $data);
        $this->load->view('templates/footer');
    }

    public function userPusat()
    {
        $this->load->model('User_model');
        $data['user'] = $this->User_model->getAllPusat();
        $this->load->view('templates/navbar');
        $this->load->view('user-pusat', $data);
        $this->load->view('templates/footer');
    }

    public function userDaerah()
    {
        $this->load->model('User_model');
        $data['user'] = $this->User_model->getAllDaerah();
        $this->load->view('templates/navbar');
        $this->load->view('user-daerah', $data);
        $this->load->view('templates/footer');
    }

    public function hapusAdmin($id)
    {
        $this->User_model->hapusDataAdmin($id);
        redirect('user/userAdmin');
    }

    public function hapusPusat($id)
    {
        $this->User_model->hapusDataPusat($id);
        redirect('user/userPusat');
    }

    public function hapusDaerah($id)
    {
        $this->User_model->hapusDataDaerah($id);
        redirect('user/userDaerah');
    }

    public function ubahAdmin($id)
    {
        $data['user'] = $this->User_model->getAdminById($id);

        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($nama == null) {
            $this->load->view('templates/navbar');
            $this->load->view('user-editadmin', $data);
            $this->load->view('templates/footer');
        } else if ($username == null) {
            $this->session->set_flashdata('pesan', 'Username Kosong!');
            $this->load->view('templates/navbar');
            $this->load->view('user-editadmin', $data);
            $this->load->view('templates/footer');
        } else if ($password == null) {
            $this->session->set_flashdata('pesan', 'Password Kosong!');
            $this->load->view('templates/navbar');
            $this->load->view('user-editadmin', $data);
            $this->load->view('templates/footer');
        } else {
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $data = array(
                'nama_admin' => $nama,
                'username' => $username,
                'password' => $password,
            );

            $this->User_model->ubah_admin($data, 'admin');
            redirect('User/userAdmin');
        }
    }
    public function ubahPusat($id)
    {
        $data['user'] = $this->User_model->getPusatById($id);

        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($nama == null) {
            $this->load->view('templates/navbar');
            $this->load->view('user-editpusat', $data);
            $this->load->view('templates/footer');
        } else if ($username == null) {
            $this->session->set_flashdata('pesan', 'Username Kosong!');
            $this->load->view('templates/navbar');
            $this->load->view('user-editpusat', $data);
            $this->load->view('templates/footer');
        } else if ($password == null) {
            $this->session->set_flashdata('pesan', 'Password Kosong!');
            $this->load->view('templates/navbar');
            $this->load->view('user-editpusat', $data);
            $this->load->view('templates/footer');
        } else {

            $data = array(
                'nama_staffpusat' => $nama,
                'username' => $username,
                'password' => $password,
            );

            $this->User_model->ubah_pusat()($data, 'staff_pusat');
            redirect('User/userPusat');
        }
    }
    public function ubahDaerah($id)
    {
        $data['user'] = $this->User_model->getDaerahById($id);

        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $daerah = $this->input->post('daerah');

        if ($nama == null) {
            $this->load->view('templates/navbar');
            $this->load->view('user-editdaerah', $data);
            $this->load->view('templates/footer');
        } else if ($username == null) {
            $this->session->set_flashdata('pesan', 'Username Kosong!');
            $this->load->view('templates/navbar');
            $this->load->view('user-editdaerah', $data);
            $this->load->view('templates/footer');
        } else if ($password == null) {
            $this->session->set_flashdata('pesan', 'Password Kosong!');
            $this->load->view('templates/navbar');
            $this->load->view('user-editdaerah', $data);
            $this->load->view('templates/footer');
        } else {

            $data = array(
                'nama_staffdaerah' => $nama,
                'username' => $username,
                'password' => $password,
                'id_daerah' => $daerah,
            );

            $this->User_model->ubah_daerah($data, 'staff_daerah');
            redirect('User/userDaerah');
        }
    }
}
