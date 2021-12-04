<?php
class ServicesController extends CI_Controller{
    public function services(){
           if($this->session->userdata('id'))
        {
             $id = $this->session->userdata('id');
    $data['account'] = $this->Account_model->user_account($id);
        }else{
            
        }
        $data['title'] = "Dove Pharmaticals and Equiptments";
        $data['desc'] = "";
        $this->load->view('config/header',$data);
        $this->load->view('pages/services');
        $this->load->view('config/footer');
    }
}