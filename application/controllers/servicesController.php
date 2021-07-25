<?php
class ServicesController extends CI_Controller{
    public function services(){
        $this->load->view('config/header');
        $this->load->view('pages/services');
        $this->load->view('config/footer');
    }
}