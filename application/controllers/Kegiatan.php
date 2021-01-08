<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{
    public function index()
    {
        $this->load->model('Kegiatan_model');
        $data['kegiatan'] = $this->Kegiatan_model->getAllUser();
        $this->load->view('templates/navbar');
        $this->load->view('kegiatan', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Kegiatan_model->hapusData($id);
        redirect('Kegiatan');
    }

    public function detail($id)
    {
        $data['kegiatan'] = $this->Kegiatan_model->getDataById($id);
        $this->load->view('templates/navbar');
        $this->load->view('kegiatan-detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['kegiatan'] = $this->Kegiatan_model->getDataById($id);

        $nama = $this->input->post('nama');
        $kategori = $this->input->post('kategori');
        $daerah = $this->input->post('daerah');
        $status = $this->input->post('status');


        if ($nama == null) {
            $this->load->view('templates/navbar');
            $this->load->view('kegiatan-edit', $data);
            $this->load->view('templates/footer');
        } else {

            $nama = $this->input->post('nama');
            $kategori = $this->input->post('kategori');
            $daerah = $this->input->post('daerah');
            $status = $this->input->post('status');

            $data = array(
                'nama_kegiatan' => $nama,
                'id_kategori' => $kategori,
                'id_daerah' => $daerah,
                'id_status' => $status,
            );

            $this->Kegiatan_model->ubah_data($data, 'kegiatan');
            redirect('Kegiatan/index');
        }
    }
}
