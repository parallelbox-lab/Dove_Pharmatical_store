<?php

class OrderProductModel extends CI_Model {
    public $_table = 'order_product';

    public function getProductsByOrderIds(array $order_ids)
    {
        if($order_ids == null){
            
        }else{
        $this->db->select("$this->_table.*");
        $this->db->select("products.product_name as product_name");
        $this->db->select("products.product_image as product_img");
        $this->db->from($this->_table);

        $this->db->where_in("order_id",$order_ids);

        $this->db->join("products","$this->_table.product_id = products.product_id");
        //$this->db->join("products","products.product_id = products.product_id");

        $query = $this->db->get();

        return $query->result();


     }
  }
}