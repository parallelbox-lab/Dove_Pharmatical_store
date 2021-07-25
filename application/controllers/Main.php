<?php
class Main extends CI_Controller{

    public function index(){
        $data['data']=$this->Account_model->displayProducts();  
        $this->load->view("config/header");
        $this->load->view("pages/index",$data);
        $this->load->view("config/footer");

    }

    public function contact(){
        $this->load->view("config/header");
        $this->load->view("pages/contact");
        $this->load->view("config/footer");
    }
}