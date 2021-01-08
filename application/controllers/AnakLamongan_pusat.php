<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AnakLamongan_pusat extends CI_Controller
{
    private $_table = "anak";

    public function index()
    {   
        $this->load->model('AnakLamongan_model');
        $data["anak"] = $this->AnakLamongan_model->getAllAnak();
        
        $this->load->view('templates/navbar_staff');
        $this->load->view('dataAnakDaerah_pusat/anakLamongan', $data);
        $this->load->view('templates/footer');
    }
}
