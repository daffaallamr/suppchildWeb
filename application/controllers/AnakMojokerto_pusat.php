<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AnakMojokerto_pusat extends CI_Controller
{
    private $_table = "anak";

    public function index()
    {   
        $this->load->model('AnakMojokerto_model');
        $data["anak"] = $this->AnakMojokerto_model->getAllAnak();
        
        $this->load->view('templates/navbar_staff');
        $this->load->view('dataAnakDaerah_pusat/anakMojokerto', $data);
        $this->load->view('templates/footer');
    }
}
