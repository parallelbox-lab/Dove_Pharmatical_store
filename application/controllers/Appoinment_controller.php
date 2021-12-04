<?php
class Appoinment_controller extends CI_Controller{

    public function appoinment(){
        $data['title'] ="";
        $data['desc'] ="";
        $this->load->view("config/header",$data);
        $this->load->view("pages/appoinment");
        $this->load->view("config/footer");
    }
    public function message(){
        $data = array(
            'Date' => $this->input->post('date'),
            'Time' => $this->input->post('time'),
            'Name' => $this->input->post('name'),
            'Prefix' => $this->input->post('prefix'),
            'Phone' => $this->input->post('phone'),
            'Email' => $this->input->post('email'),
            'Gender'=>$this->input->post('gender'),
            'Age_range'=>$this->input->post('age'));
                $result=$this->Account_model->saveData($data);
                if($result)
                {
                echo  1;	
                }
                else
                {
                echo  0;	
                }

    }
    
}