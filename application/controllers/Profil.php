<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function index()
    {
        $this->load->model('User_model');
        $dataProfile = $this->session->userdata('user');
        $id = $dataProfile['id'];
        $data['user'] = $this->User_model->getAdminById($id);
        // var_dump($data['user']);
        // die;
        $this->load->view('templates/navbar');
        $this->load->view('profil', $data);
        $this->load->view('templates/footer');
    }

    public function Logout()
    {
        $this->session->unset_userdata('id');
        $this->session->sess_destroy();
        redirect('auth');
    }
}
