<?php

class Home_staff extends CI_Controller
{
    public function index()
    {
        $this->load->model('Home_model');
        $data = $this->Home_model->getTotal2018();


        $this->load->view('templates/navbar_staff');
        $this->load->view('home-staff', $data);
        $this->load->view('templates/footer');
    }
}
