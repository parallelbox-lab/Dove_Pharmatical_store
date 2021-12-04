<?php
class User_controller extends CI_Controller {
   public function __construct(){
       parent::__construct();
       $this->load->model('User_model');
       $this->load->library('email');
   } 
   
  public function login(){
    if($this->session->userdata("id"))//If already logged in
    {
        redirect(base_url());//redirect to the homepage page
    }
    $data['desc'] ='';
    $data['title'] ="";
    $data['error'] = 0;

    $submit = $this->input->post('submit');
    if(isset($submit)) {

    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if($this->form_validation->run())
  {
    if($this->input->post())//data inputed for login
    {
        $email = $this->security->xss_clean( $this->input->post('email', TRUE));
        $password =$this->security->xss_clean(  $this->input->post('password', TRUE));

        $user = $this->User_model->login($email, $password);
        if(!$user){
          $data['error'] = 1;
        }//when user doesn't exist
        else //when user exist
        {
            $usrid =$this->session->set_userdata('id', $user['id']);
            $this->get_user_cart_contents($usrid);
            
          if($this->session->userdata("id") == True)//If already logged in
     {
    $this->store_user_cart_contents();
     }
            redirect($_SERVER['HTTP_REFERER']);
        }
      }
    }

}
$this->load->view('User_Details/login',$data);

  }
  
  // FORGOT PASSWORD
  public function reset_link(){
    if($this->session->userdata("id"))//If already logged in
    {
        redirect(base_url());//redirect to the homepage page
    }
    $data['desc'] ='';
    $data['title'] ="";
   
    $get_email = $this->input->post('email');
    $send = $this->input->post('send');
      if(isset($send)){
        $this->form_validation->set_rules('email', 'Email', 'required');
        if($this->form_validation->run())
        {
      $result = $this->db->query("select * from Users where email ='".$get_email."'")->result_array();
      if(count($result) > 0){
                
      } else{
        $this->session->set_flashdata('error',"email not registered");
        // redirect(base_url('account/forget-password'));
        }
    }
  }
    
    $this->load->view('User_Details/reset_link',$data);
  }
  //Create Account Method
  
//Add  New Admin
public function register(){
  if($this->session->userdata('id')){
    redirect(base_url());
  }

  $data['desc'] ='';
    $data['title'] ="";
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
            'rules' => 'trim|required|is_unique[users.email]|valid_email',//is unique email in the user's table of DB
             'errors' => array('is_unique' => 'Email Address already exist pls Choose Another one')
                 ),
          array(
            'field' => 'phone',
            'label' => 'Phone Number',
            'rules' => 'trim|required|min_length[11]|max_length[11]',//is 
                 ),
            array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required|min_length[8]|max_length[20]|matches[cpassword]'
        ),
        
          array(
            'field' => 'cpassword',
            'label' => 'Confirm Password',
            'rules' => 'trim|required|min_length[8]|max_length[20]'
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
            'fullname' => $this->input->post('fullname'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'password' => sha1($this->input->post('password')),

        );
        
          $user =   $this->User_model->insertUser($data);
           
          $usrid = $this->session->set_userdata('id', $user);
             $this->get_user_cart_contents($usrid);
            redirect($_SERVER['HTTP_REFERER']);

    
    }

}

  $this->load->view('User_Details/register',$data);

}

  public function verify(){
       if(!$this->session->userdata('verify_email')){
    redirect('Create-account');
  }
  $this->load->view('config/header');
  $this->load->view('User_Details/verify');
  $this->load->view('config/footer');
  }
  
  
  // Logout method
  
public function logout() {
  $this->store_user_cart_contents();
  $this->session->unset_userdata('id');
    $this->session->unset_userdata('cart_contents');
  $this->session->set_flashdata('logout', 'Logout successful');
  redirect(base_url());

}

function get_user_cart_contents($usrid)
{
//Removes any cart contents from cart session by any other user (guest or member)
$this->load->library('cart');
$usrid = $this->session->userdata('id');

//Loads the cart items which were stored by the particular user in database table
$sql = "SELECT * FROM cart_details WHERE user_id='$usrid'";
$q = $this->db->query($sql);
$res = $q->result();
foreach($res as $val)
{
//Fetches the cart field ‘options’ from database as an array
$options_arr = explode(",", $val->options);
foreach($options_arr as $arr)
{
$arr_new = explode(":", $arr);
$options[$arr_new[0]] = $arr_new[1];
}
//Inserts the newly fetched cart data for the particular user into this session as per cart class format
$data = array('id'=> $val->product_id, 'qty'=>$val->quantity, 'price'=> $val->price, 'name'=> $val->product_name, 'options'=>$options);
$this->cart->insert($data);
}

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