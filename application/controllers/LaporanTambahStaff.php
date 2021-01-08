<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanTambahStaff extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/navbar_staff');
        $this->load->view('templates/footer');

        $nama = $this->input->post('nama');
        $tempat = $this->input->post('tempat');
        $deskripsi = $this->input->post('detail');
        $daerah = $this->input->post('daerah');

        if ($nama == null) {
            $this->load->view('laporan-tambah');
        } else if ($tempat == null) {
            $this->session->set_flashdata('pesan', 'Tempat Kosong!');
            $this->load->view('laporan-tambah');
        } else if ($deskripsi == null) {
            $this->session->set_flashdata('pesan', 'Deskripsi Kosong!');
            $this->load->view('laporan-tambah');
        } else if ($daerah == null) {
            $this->session->set_flashdata('pesan', 'Daerah Kosong!');
            $this->load->view('laporan-tambah');
        } else {
            $this->tambah_laporan();
        }
    }

    public function tambah_laporan()
    {
        $nama = $this->input->post('nama');
        $tempat = $this->input->post('tempat');
        $deskripsi = $this->input->post('detail');
        $daerah = $this->input->post('daerah');

        $data = array(
            'nama' => $nama,
            'tempat' => $tempat,
            'detail' => $deskripsi,
            'daerah' => $daerah
        );
        $this->Laporan_model->input_data($data, 'kasus');
        redirect('Laporan_staff/index');
    }
}
