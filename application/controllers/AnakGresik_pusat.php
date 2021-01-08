<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AnakGresik_pusat extends CI_Controller
{
    private $_table = "anak";

    public function index()
    {   
        $this->load->model('AnakGresik_model');
        $data["anak"] = $this->AnakGresik_model->getAllAnak();
        
        $this->load->view('templates/navbar_staff');
        $this->load->view('dataAnakDaerah_pusat/anakGresik', $data);
        $this->load->view('templates/footer');
    }
}
