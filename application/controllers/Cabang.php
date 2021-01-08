<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cabang extends CI_Controller
{
    public function index()
    {
        $this->load->model('Cabang_model');
        $data = $this->Cabang_model->getTotalAnak();

        $this->load->view('templates/navbar');
        $this->load->view('cabang', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $this->load->view('templates/navbar');
        $this->load->view('templates/footer');

        $nama = $this->input->post('nama');
        $nik = $this->input->post('nik');
        $tempat = $this->input->post('tempat');
        $tgl = $this->input->post('tanggal');
        $jenis = $this->input->post('jenis');
        $agama = $this->input->post('agama');
        $alamat = $this->input->post('alamat');
        $wali = $this->input->post('wali');
        $kesehahtan = $this->input->post('kesehatan');
        $pendidikan = $this->input->post('pendidikan');
        $ekonomi = $this->input->post('ekonomi');
        $daerah = $this->input->post('daerah');

        if ($nama == null) {
            $this->load->view('dataAnakDaerah/tambahanak');
        } else if ($nik == null) {
            $this->session->set_flashdata('pesan', 'NIK Kosong!');
            $this->load->view('dataAnakDaerah/tambahanak');
        } else {
            $this->tambah_anak();
        }
    }

    public function tambah_anak()
    {

        $nama = $this->input->post('nama');
        $nik = $this->input->post('nik');
        $tempat = $this->input->post('tempat');
        $tgl = $this->input->post('tanggal');
        $jenis = $this->input->post('jenis');
        $agama = $this->input->post('agama');
        $alamat = $this->input->post('alamat');
        $wali = $this->input->post('wali');
        $kesehahtan = $this->input->post('kesehatan');
        $pendidikan = $this->input->post('pendidikan');
        $ekonomi = $this->input->post('ekonomi');
        $daerah = $this->input->post('daerah');

        $data = array(
            'nama' => $nama,
            'nik' => $nik,
            'tempat_lahir' => $tempat,
            'tgl_lahir' => $tgl,
            'jenis_kelamin' => $jenis,
            'agama' => $agama,
            'alamat' => $alamat,
            'wali' => $wali,
            'kesehatan' => $kesehahtan,
            'pendidikan' => $pendidikan,
            'ekonomi' => $ekonomi,
            'id_daerah' => $daerah,
            'created_at' => 2021,
        );
        $this->Cabang_model->input_dataAnak($data, 'anak');
        redirect('cabang/index');
    }
}
