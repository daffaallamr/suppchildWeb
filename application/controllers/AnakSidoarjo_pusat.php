<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AnakSidoarjo_pusat extends CI_Controller
{
    private $_table = "anak";

    public function index()
    {   
        $this->load->model('AnakSidoarjo_model');
        $data["anak"] = $this->AnakSidoarjo_model->getAllAnak();
        
        $this->load->view('templates/navbar_staff');
        $this->load->view('dataAnakDaerah_pusat/anakSidoarjo', $data);
        $this->load->view('templates/footer');
    }
}
