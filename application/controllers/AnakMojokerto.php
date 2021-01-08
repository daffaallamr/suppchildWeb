<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AnakMojokerto extends CI_Controller
{
    private $_table = "anak";

    public function index()
    {
        $this->load->model('AnakMojokerto_model');
        $data["anak"] = $this->AnakMojokerto_model->getAllAnak();

        $this->load->view('templates/navbar');
        $this->load->view('dataAnakDaerah/anakMojokerto', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        if ($this->db->delete($this->_table, array("id" => $id))) {
            redirect('anakMojokerto');
        }
    }

    public function detail($id)
    {
        $data['anak'] = $this->AnakMojokerto_model->getAnakById($id);
        $this->load->view('templates/navbar');
        $this->load->view('dataAnakDaerah/anakDetail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['anak'] = $this->AnakMojokerto_model->getAnakById($id);

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
            $this->load->view('templates/navbar');
            $this->load->view('dataAnakDaerah/anakUbah', $data);
            $this->load->view('templates/footer');
        } else if ($nik == null) {
            $this->session->set_flashdata('pesan', 'Username Kosong!');
            $this->load->view('templates/navbar');
            $this->load->view('dataAnakDaerah/anakUbah', $data);
            $this->load->view('templates/footer');
        } else {
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
            );

            $this->AnakMojokerto_model->ubah($data, 'anak');
            redirect('AnakMojokerto/index');
        }
    }
}
