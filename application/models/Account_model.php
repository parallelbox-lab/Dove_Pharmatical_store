    <?php
class Account_model extends CI_Model{

    public function saveData($data) 
	{
		if($this->db->insert('appoinment_request',$data))
		{
		return 1;	
		}
		else
		{
		return 0;	
		}
    }
	
    public function displayProducts($limit = 4){
		$this->db->select();
        $this->db->from('products');
        $this->db->order_by('date_added','desc');
        $this->db->limit($limit);
        $query = $this->db->get();
        return $query->result();
	}

  function AllProducts(){
    $this->db->select();
    $this->db->from('products');
    $this->db->order_by('date_added','desc');
    $query = $this->db->get();
    return $query->result();
}

	public function getpost($slug = FALSE , $limit = FALSE , $offset = FALSE){
        if($limit){
           $this->db->limit($limit , $offset);
        }
       
         $query = $this->db->get_where('products' , array('slug' => $slug ));
         return $query->row_array();
     
       }

      public function login($fullname, $password)
       {
           $match = array(
               'fullname'=>$fullname,
               'password' => sha1($password),
   
           );
   
           $this->db->select()->from('admin_users')->where($match);
           $query = $this->db->get();
           return $query->first_row('array');
       }

    public function account($admin_id){
		$this->db->where('id',$admin_id);
		$result = $this->db->get('admin_users');
		return $result->row_array();
    }

    function create_user($data)
    {
        $this->db->insert('admin_users', $data);
        return $this->db->insert_id();
    }
    
    public function get_products(){
      $this->db->select();
      $this->db->from('products');
      $this->db->order_by('date_added','desc');
      $query = $this->db->get();
      return $query->result();
  }

  public function get_Admin(){
    $this->db->select();
    $this->db->from('admin_users');
    $query = $this->db->get();
    return $query->result();
}

}
