<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KegiatanTambah extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/navbar');
        $this->load->view('templates/footer');

        $nama = $this->input->post('nama');
        $daerah = $this->input->post('daerah');
        $file = $this->input->post('file');

        if ($nama == null) {
            $this->load->view('kegiatan-tambah');
        } else if ($daerah == null) {
            $this->session->set_flashdata('pesan', 'Daerah Kosong!');
            $this->load->view('kegiatan-tambah');
        } else {
            $this->tambah_kegiatan();
        }
    }

    public function tambah_kegiatan()
    {
        $nama = $this->input->post('nama');
        $kategori = $this->input->post('kategori');
        $daerah = $this->input->post('daerah');
        $file = $_FILES['file'];
        if ($file = '') {
        } else {
            $config['upload_path'] = './assets/file/';
            $config['allowed_types'] = 'doc|docx|pdf';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                echo "Upload Gagal";
            } else {
                $file = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_kegiatan' => $nama,
            'id_kategori' => $kategori,
            'id_daerah' => $daerah,
            'file_ajuan' => $file,
        );
        $this->Kegiatan_model->input_data($data, 'kegiatan');
        redirect('Kegiatan/index');
    }
}
