<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AnakSurabaya_pusat extends CI_Controller
{
    private $_table = "anak";

    public function index()
    {   
        $this->load->model('AnakSurabaya_model');
        $data["anak"] = $this->AnakSurabaya_model->getAllAnak();
        
        $this->load->view('templates/navbar_staff');
        $this->load->view('dataAnakDaerah_pusat/anakSurabaya', $data);
        $this->load->view('templates/footer');
    }
}
