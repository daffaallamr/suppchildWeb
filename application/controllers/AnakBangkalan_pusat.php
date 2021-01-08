<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AnakBangkalan_pusat extends CI_Controller
{
    private $_table = "anak";

    public function index()
    {   
        $this->load->model('AnakBangkalan_model');
        $data["anak"] = $this->AnakBangkalan_model->getAllAnak();
        
        $this->load->view('templates/navbar_staff');
        $this->load->view('dataAnakDaerah_pusat/anakBangkalan', $data);
        $this->load->view('templates/footer');
    }
}
