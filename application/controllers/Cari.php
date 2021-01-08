<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cari extends CI_Controller
{
    public function index()
    {
        $this->load->model('Anak_model');
        $data['anak'] = $this->Anak_model->getAllAnak();
        if ($this->input->post('keyword')) {
            $data['anak'] = $this->Anak_model->cariDataAnak();
        }
        $this->load->view('templates/navbar');
        $this->load->view('search', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Anak_model->hapusData($id);
        redirect('Cari');
    }
}
