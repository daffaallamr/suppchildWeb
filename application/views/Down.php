<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Down extends CI_Controller
{
    public function index()
    {
        $this->load->model('Laporan_model');
        $data['kasus'] = $this->Laporan_model->getAllUser();
        $this->load->view('tabelkasus', $data);
    }
}
