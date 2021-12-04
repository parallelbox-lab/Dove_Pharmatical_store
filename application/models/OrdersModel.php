   <?php

class OrdersModel extends CI_Model {
    public $_table = 'billing_address';
	public $belongs_to = array( 'users' );


   public function getUserOrders( $accountNo){
        $this->db->select("*");
        $this->db->from($this->_table);
        $this->db->where("user_id", $accountNo);

        $query = $this->db->get();

        //$return = $query->result();
        return $query->result();


    }

    public function getUserOrderIds( $accountNo)
    {
        $this->db->select("id");
        $this->db->from($this->_table);
        $this->db->where("user_id", $accountNo  );
        $query = $this->db->get();
        $results = $query->result();

        $order_ids = array();
        foreach ($results as $row){
            $order_ids[] =  $row->id;
        }

        //$return = $query->result();
        return $order_ids;

    }
    
}
?>