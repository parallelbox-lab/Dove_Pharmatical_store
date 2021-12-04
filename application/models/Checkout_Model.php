<?php
class Checkout_Model extends CI_Model{
    
    public function get_user($accinfo)
	{
		$this->db->where('id',$accinfo);
		$result = $this->db->get('users');
		return $result->row_array();
    }
    
   
    function insert($data)
    {
        return $this->db->insert('order_product', $data);
    }
}
?>