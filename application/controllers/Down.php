<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Down extends CI_Controller
{
    public function index()
    {
        $this->load->model('Laporan_model');
        $data['kasus'] = $this->Laporan_model->getAllUser();
        $this->load->view('tabel/tabelkasus', $data);
    }

    public function kegiatan()
    {
        $this->load->model('Kegiatan_model');
        $data['kegiatan'] = $this->Kegiatan_model->getAllUser();
        $this->load->view('tabel/tabelkegiatan', $data);
    }

    public function bangkalan()
    {
        $this->load->model('AnakBangkalan_model');
        $data["anak"] = $this->AnakBangkalan_model->getAllAnak();
        $this->load->view('tabel/tabelbangkalan', $data);
    }

    public function gresik()
    {
        $this->load->model('AnakGresik_model');
        $data["anak"] = $this->AnakGresik_model->getAllAnak();
        $this->load->view('tabel/tabelgresik', $data);
    }

    public function lamongan()
    {
        $this->load->model('AnakLamongan_model');
        $data["anak"] = $this->AnakLamongan_model->getAllAnak();
        $this->load->view('tabel/tabellmg', $data);
    }

    public function mojokerto()
    {
        $this->load->model('AnakMojokerto_model');
        $data["anak"] = $this->AnakMojokerto_model->getAllAnak();
        $this->load->view('tabel/tabelmojokerto', $data);
    }

    public function sidoarjo()
    {
        $this->load->model('AnakSidoarjo_model');
        $data["anak"] = $this->AnakSidoarjo_model->getAllAnak();
        $this->load->view('tabel/tabelsidoarjo', $data);
    }

    public function surabaya()
    {
        $this->load->model('AnakSurabaya_model');
        $data["anak"] = $this->AnakSurabaya_model->getAllAnak();
        $this->load->view('tabel/tabelsurabaya', $data);
    }
}
