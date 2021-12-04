<?php
class Main extends CI_Controller{

 public function __construct(){
        parent::__construct();
     $this->load->helper('text');
     

 }
    public function index(){
        $userData = array(
            'user_ip' => $this->input->ip_address(),
            'page_name' => 'index'
            );
        $this->Account_model->save_pageCount($userData);
         if($this->session->userdata('id'))
        {
             $id = $this->session->userdata('id');
             $data['account'] = $this->Account_model->user_account($id);
        }else{
            
        }
        $data['title'] = "Supplier of Medical Equipments - Dove Multinational";
        $data['desc'] = "Dove Multinational is a single source provider of Medical Equipments,Teaching Equiptments,Hospital Equipments and lots more";
        $data['data']=$this->Account_model->displayProducts();
        $this->load->view("config/header",$data);
        $this->load->view("pages/index",$data);
        $this->load->view("config/footer");

    }

    public function contact(){
           $userData = array(
            'user_ip' => $this->input->ip_address(),
            'page_name' => 'contact'
            );
            $this->Account_model->save_pageCount($userData);
           if($this->session->userdata('id'))
        {
             $id = $this->session->userdata('id');
    $data['account'] = $this->Account_model->user_account($id);
        }else{
            
        }
        $data['title'] = "Dove Pharmaticals and Equiptments";
        $data['desc'] = "";
        $this->load->view("config/header",$data);
        $this->load->view("pages/contact");
        $this->load->view("config/footer");
    }

    public function about_us(){
        $data['title'] = "About Dove Multinational";
        $data['desc'] = "";
        $this->load->view("config/header",$data);
        $this->load->view("pages/about_us");
        $this->load->view("config/footer");
    }
}
    
    
    
