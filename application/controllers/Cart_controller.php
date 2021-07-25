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
                  if($status)
                  {
                      $this->session->set_flashdata('success', 'Product added to cart successfully');
                  }
                  else{
                      $this->session->set_flashdata('error', 'Failed to add product to cart');
                  }
          return redirect("show-cart");
        }
        
        
    public function removeItem(){
      $this->input->post("row_id");
  }

  public function delete_to_cart($row_id){
  $data = array(
      'rowid' => $row_id,
      'qty'   => 0
    );
   $this->cart->update($data);
  return redirect("show-cart");
}
public function update_cart_quantity(){
  $quantity = $this->input->post('qty',true);
  $row_id = $this->input->post('rowid',true);
  $data = array(
      'rowid' => $row_id,
      'qty'   => $quantity
    );
  $this->cart->update($data);
  return redirect("show-cart");

}
  /**
   * Display the list of resource.
   *
   *
   */
  public function show_cart()
  {

      $data['cart'] = $this->cart->contents();

       $this->load->view('config/header',$data);
       $this->load->view('cart',$data);
       $this->load->view('config/footer');
  }

}

?>