<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cari_staff extends CI_Controller
{
    public function index()
    {
        $this->load->model('Anak_model');
        $data['anak'] = $this->Anak_model->getAllAnak();
        if ($this->input->post('keyword')) {
            $data['anak'] = $this->Anak_model->cariDataAnak();
        }
        $this->load->view('templates/navbar_staff');
        $this->load->view('search-staff', $data);
        $this->load->view('templates/footer');
    }
}
