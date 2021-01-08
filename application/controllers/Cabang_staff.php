<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cabang_staff extends CI_Controller
{
    public function index()
    {
        $this->load->model('Cabang_model');
        $data = $this->Cabang_model->getTotalAnak();

        $this->load->view('templates/navbar_staff');
        $this->load->view('cabang-staff', $data);
        $this->load->view('templates/footer');
    }
}
