<?php
class Product_controller extends CI_Controller{
       public function __construct()
    {
        parent::__construct();
       
    }
    
    public function product_detail($slug = FALSE){
        if($this->session->userdata('id'))
        {
           $id = $this->session->userdata('id');
           $data['account'] = $this->Account_model->user_account($id);
        
         }else{
            
        }
        
        $data['title'] = "Dove Pharmaticals and Equiptments";
        $data['desc'] = "";
        $data['post'] = $this->Account_model->getPost($slug);
        $post_id = $data['post']['product_id'];
        // $data['get_related_products'] = $this->Account_model->related_products();
        if($data['post'] == null){
           redirect(base_url());
        }

       
                 
        $this->load->vars($data);
        $this->load->view("config/header");
        $this->load->view("pages/product_details");
        $this->load->view("config/footer");
    }

    public function products($category_id = null){
        if($this->session->userdata('id'))
        {
             $id = $this->session->userdata('id');
    $data['account'] = $this->Account_model->user_account($id);
        }else{
            
        }
        $data['title'] = "";
        $data['desc'] = "";
        
        $config = array();
        $config["base_url"] = base_url() . "products";
        $config["total_rows"] = $this->Account_model->AllProducts($category_id);
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

		
		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;		
        $data["links"] = $this->pagination->create_links();

        $data['data'] = $this->Account_model->record_get($config["per_page"],$page,$category_id);
        // Get Total rows
        $data['total_rows'] = $config["total_rows"];

        //Get Categories
        $data['categories'] = $this->Account_model->get_category();
        //


   
        $this->load->view("config/header",$data);
        $this->load->view("pages/products",$data);
        $this->load->view("config/footer");
    }
    
    
}