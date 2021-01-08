<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan_staff extends CI_Controller
{
    public function index()
    {
        $this->load->model('Kegiatan_model');
        $data['kegiatan'] = $this->Kegiatan_model->getAllUser();
        $this->load->view('templates/navbar_staff');
        $this->load->view('kegiatan-staff', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['kegiatan'] = $this->Kegiatan_model->getDataById($id);
        $this->load->view('templates/navbar_staff');
        $this->load->view('kegiatan-detail', $data);
        $this->load->view('templates/footer');
    }
}
