<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserEdit extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/navbar');
        $this->load->view('user-edit',);
        $this->load->view('templates/footer');
    }
}
