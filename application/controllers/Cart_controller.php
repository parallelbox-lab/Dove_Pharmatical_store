<?php
class Cart_controller extends CI_Controller{


  public function add_to_cart(){
          $product_id = $this->input->post("product_auth");
          $qty = $this->input->post("qty");
          $product_info = $this->CartModel->select_product_info_by_product_id($product_id);
          $data = array(
              'id'      => $product_info->product_id,
              'qty'     => $qty,
              'price'   => $product_info->price,
              'name'    => $product_info->product_name,
              'options' => array('pro_image' => $product_info->product_image)
            );
      
                  $status = $this->cart->insert($data);
                  $usrid =$this->session->userdata('id');
                    if($this->session->userdata('id')){
                    $this->store_user_cart_contents();
                     }else{
                         echo"account not created";
                     }

                  if($status)
                  {
                      $this->session->set_flashdata('success', 'Product added to cart successfully');
                      
                  }
                  else{
                      $this->session->set_flashdata('error', 'Failed to add product to cart');
                  }
          redirect($_SERVER['HTTP_REFERER']);
          exit;        }
        
        
    public function removeItem(){
      $this->input->post("row_id");
  }

  public function delete_to_cart($row_id){
  $data = array(
      'rowid' => $row_id,
      'qty'   => 0
    );
   $this->cart->update($data);
   $usrid =$this->session->userdata('id');
                    if($this->session->userdata('id')){
                    $this->store_user_cart_contents();
                     }else{
                         echo"account not created";
                     }
   
  return redirect("show-cart");
}
public function update_cart_quantity() {    
  $rowid = $this->input->post('id');
  $qty = $this->input->post('qty');
  $data = array(
      'rowid' => $rowid,
      'qty' => $qty
  );
  if($this->session->userdata('id')){

  }else{
    $this->cart->update($data);
  }
        
       

}

  /**
   * Display the list of resource.
   *
   *
   */
  public function show_cart()
  {
         if($this->session->userdata('id'))
        {
         $id = $this->session->userdata('id');
         $data['account'] = $this->Account_model->user_account($id);
        }else{
            
        }
  $data['title'] = "Shopping Cart - Dovemultinational investment Nigeria";
  $data['desc'] = "View and edit equipments in your Dovemultinational shopping cart, and checkout to recieve a quote.";
      $data['cart'] = $this->cart->contents();
       $this->load->view('config/header',$data);
       $this->load->view('cart',$data);
       $this->load->view('config/footer');
  }
  
 
  
  // store cart contents inside database
public function store_user_cart_contents()
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