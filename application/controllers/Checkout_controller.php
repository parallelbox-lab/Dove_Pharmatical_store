<?php 
class Checkout_controller extends CI_Controller{
    
       public function __construct()
    {
        parent::__construct();
      $this->load->model('Checkout_Model');
       $this->load->model('User_model');
        if(!$this->session->userdata('id'))
        {
            redirect(base_url('login'));
        }else{
        }
    }
    
    public function checkout(){
         //if cart is empty,
         $id = $this->session->userdata('id');

    $data['account'] = $this->Account_model->user_account($id);
    $data['get_address'] = $this->User_model->get_address($id);
         $data['title'] = "";
         $data['desc'] = "";
         $accinfo = $this->session->userdata('id');
         $data['account'] = $this->Checkout_Model->get_user($accinfo);
        if(count($this->cart->contents()) == 0){
            $this->session->set_flashdata('error', 'Please add items  to cart first');
            redirect(base_url('products'));
            exit();
        }

        $data['cart'] = $this->cart->contents();

        //validations and order submission
            $cart_contents = $this->cart->contents();

        $total_amt = $this->cart->total(); 
        $data['error'] = NULL;
if($this->input->post())
{
    $config = array(
        array(
            'field' => 'fullname',
            'label' => 'Fullname',
            'rules' => 'trim|required|min_length[5]',//is unique username in the user's table of DB
          ),
      
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email',
                 ),
            array(
            'field' => 'country',
            'label' => 'Country',
            'rules' => 'trim|required|min_length[3]|max_length[200]'
        ),
        
          array(
            'field' => 'address',
            'label' => 'Address',
            'rules' => 'trim|required|min_length[5]|max_length[200]'
        ),
         array(
            'field' => 'town/city',
            'label' => 'Town/City',
            'rules' => 'trim|required|min_length[5]|max_length[200]'
        ),
         array(
            'field' => 'state',
            'label' => 'State',
            'rules' => 'trim|required|min_length[1]|max_length[200]'
        ),
         array(
            'field' => 'postcode/zip',
            'label' => 'Postcode/Zip',
            'rules' => 'trim|required|min_length[5]|max_length[20]'
        ),
         array(
            'field' => 'phone',
            'label' => 'Phone Number',
            'rules' => 'trim|required|min_length[5]|max_length[20]'
        ),

        
    );
    $this->load->library('form_validation');
    $this->form_validation->set_rules($config);
    if($this->form_validation->run() == FALSE)
    {
  
      }
    else
    {
        $data = array(
            'user_id' => $this->session->userdata('id'),
            'fullname' => $this->input->post('fullname'),
            'email' => $this->input->post('email'),
            'country' => $this->input->post('country'),
            'address' => $this->input->post('address'),
            'town/city' => $this->input->post('town/city'),
            'state' => $this->input->post('state'),
            'postcode/zip' => $this->input->post('postcode/zip'),
            'phone' => $this->input->post('phone'),

        );
         
         
           $this->db->insert('billing_address',$data);
           $order_id =  $this->db->insert_id();
           $rand = rand($order_id);
         
        if($order_id){
              foreach ($cart_contents as $product){
            $order_product_data = array(
                'product_id' => $product['id'],
                'order_id'=>$rand,
                'qty'=>$product['qty'],
            );
            $this->Checkout_Model->insert($order_product_data);
        }
        //sending of cart contents to db
           $data['cart'] = $this->cart->contents();
           $data['cus_details'] = $data;
           $from_email = "support@dovemultinationalinvnig.org";
           $to_email = $this->input->post('email');
           $this->load->library("email");
           $this->email->from($from_email,'Dove Multinatonal Investment Limited');
           $this->email->to($to_email);
           $this->email->subject("Order Payment Invoice ");
           $this->email->message($this->load->view('checkout/email_template', $data, true));
           $this->email->set_mailtype('html');


           if($this->email->send()){
               echo"sent";
           } else {
            show_error($this->email->print_debugger());
        }
           
            $this->cart->destroy();
            $this->session->set_flashdata('success', 'Order placed successfully');
           $this->session->set_userdata('order_id',$order_id);
           // saving new cart content to db
           $this->store_user_cart_contents();
          redirect('order/thank-you');
            exit;
        }
        else{
            $this->session->set_flashdata('error', 'Oops! Something went wrong.');
            redirect(base_url('products'));
            exit;
        } 
    }

}
        $this->load->view('config/header',$data);
        $this->load->view('checkout/checkout',$data);
        $this->load->view('config/footer');
    }
    
    public function order_con(){
        if(!$this->session->userdata('order_id')){
             redirect(base_url('products'));
         }
         $data['title'] = "";
         $data['desc'] = "";
         
         
    $id = $this->session->userdata('id');
    $data['account'] = $this->Account_model->user_account($id);
    $this->load->view('config/header',$data);
    $this->load->view('checkout/thank_you',$data);
    $this->load->view('config/footer');
    }
    
    
        // store cart contents inside database
    function store_user_cart_contents()
    {
    $userid = $this->session->userdata('id');
    //Deletes the old cart contents of the particular user to avoid duplication of user's cart contents
    
    $sql1 = "DELETE FROM cart_details WHERE user_id='$userid'";
    
    $q1 = $this->db->query($sql1);
    //Taking the slice of the cart_contents containing the cart items only. We do not need to store the ‘cart total’ or the ‘total items’.
    $contents = array_slice($this->session->userdata('cart_contents'),0,count($this->session->userdata('cart_contents'))); //removing 'total items' and 'cart total' from cart contents array
    foreach($contents as $items)
    {
    //Storing the cart_contents ‘options’ array field as a string.
    if(isset($items['options'])){
    foreach($items['options'] as $key => $value)
    {
    $data[] = $key.":".$value;
    }
    $options = implode(",",$data);
    //Insert new cart contents of user into database table
    $sql = "Insert into cart_details (user_id,row_id,product_id,quantity,price,product_name,options) VALUES(".$userid.", '".$items['rowid']."',".$items['id'].", ".$items['qty'].", ".$items['price'].", '".$items['name']."', '".$options."')";
    $q = $this->db->query($sql);
    }else{
        echo "Product Not found";
       }
     }
    }

}



























?>