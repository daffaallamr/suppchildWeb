<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model('Home_model');
        $data = $this->Home_model->getTotal2018();

        $this->load->view('templates/navbar');
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }
}
