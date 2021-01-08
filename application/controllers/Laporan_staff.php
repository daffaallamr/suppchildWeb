<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_staff extends CI_Controller
{
    public function index()
    {
        $this->load->model('Laporan_model');
        $data['kasus'] = $this->Laporan_model->getAllUser();
        $this->load->view('templates/navbar_staff');
        $this->load->view('laporan-staff', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['kasus'] = $this->Laporan_model->getDataById($id);
        $data['status'] = ['', 'Terima', 'Proses', 'Pantau'];

        $nama = $this->input->post('nama');
        $tempat = $this->input->post('tempat');
        $deskripsi = $this->input->post('detail');
        $daerah = $this->input->post('daerah');
        $status = $this->input->post('status');

        if ($nama == null) {
            $this->load->view('templates/navbar_staff');
            $this->load->view('laporan-editstaff', $data);
            $this->load->view('templates/footer');
        } else if ($tempat == null) {
            $this->session->set_flashdata('pesan', 'Tempat Kosong!');
            $this->load->view('templates/navbar_staff');
            $this->load->view('laporan-editstaff', $data);
            $this->load->view('templates/footer');
        } else if ($deskripsi == null) {
            $this->session->set_flashdata('pesan', 'Deskripsi Kosong!');
            $this->load->view('templates/navbar_staff');
            $this->load->view('laporan-editstaff', $data);
            $this->load->view('templates/footer');
        } else {

            $data = array(
                'nama' => $nama,
                'tempat' => $tempat,
                'detail' => $deskripsi,
                'id_daerah' => $daerah,
                'status' => $status,
            );

            $this->Laporan_model->ubah_data($data, 'kasus');
            redirect('Laporan_staff/index');
        }
    }
}
