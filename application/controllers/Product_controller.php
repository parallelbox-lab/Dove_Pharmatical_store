<?php
class Product_controller extends CI_Controller{
    public function product_detail($slug = FALSE){
              
        $data['post'] = $this->Account_model->getPost($slug);
        $post_id = $data['post']['product_id'];
         if(empty($data['post'])){
             echo "helllo";
        }
         
          $this->load->vars($data);
        $this->load->view("config/header");
        $this->load->view("pages/product_details");
        $this->load->view("config/footer");
    }

    public function products(){
        $data['data']=$this->Account_model->AllProducts();  
        $this->load->view("config/header",$data);
        $this->load->view("pages/products",$data);
        $this->load->view("config/footer");
    }
    
}