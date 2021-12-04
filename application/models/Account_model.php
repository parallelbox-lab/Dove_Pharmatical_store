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
    
  
//admin login

    //Validate user
    function login($fullname, $password)
    {
        $match = array(
            'fullname'=>$fullname,
            'password' => sha1($password),

        );

        $this->db->select()->from('admin_users')->where($match);
        $query = $this->db->get();
        return $query->first_row('array');
    }
    
  function AllProducts($category){
    $this->db->select();
    $this->db->from('products');
    if($category)
        {
            $this->db->where('category_slug',$category);
        }
        
    $this->db->order_by('date_added','desc');
    $query = $this->db->get();
    return $this->db->count_all_results();
  }

	public function getpost($slug = FALSE , $limit = FALSE , $offset = FALSE){
        if($limit){
           $this->db->limit($limit , $offset);
        }
       
         $query = $this->db->get_where('products' , array('slug' => $slug ));
         return $query->row_array();
     
       }
      //  get related products
      // public function related_products(){
      //   $sql = 'SELECT products.* From products JOIN category ON category.slug = products.category_slug WHERE products.category_slug != '.$this->db->escape($category_slug);
      // }
//Get user details
    public function user_account($id){
		$this->db->where('id',$id);
		$result = $this->db->get('users');
		return $result->row_array();
    }
  //Get admn details
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

  public function get_category(){
  $this->db->select();
  $this->db->from('category');
  $query = $this->db->get();
  return $query->result();
 }
 
 public function get_address($accountNo){
     	$this->db->where('user_id',$accountNo);
		$result = $this->db->get('address_book');
		return $result->row_array();
 }

 public function add_product_model($product_image){
   $slug  = url_title($this->input->post('pname',true),'dash', TRUE);
   $category_slug = url_title($this->input->post('pro_cat',true),'dash', TRUE);
  $data['product_name'] = $this->input->post('pname',true);
  $data['product_image'] = $product_image;
  $data['product_description'] = $this->input->post('desc',true);
  $data['category_slug'] = $category_slug;
  $data['price'] = $this->input->post('price',true);
  $data['slug'] = $slug;
  

  
  $this->db->insert('products',$data);	
}

 public function deleterecords($id){
   $this->db->where("product_id",$id);
   $this->db->delete("products");
 }
// Products Pagination
public function record_get($limit, $start,$category_id) {

$this->db->limit($limit, $start,$category_id);
    if($category_id)
        {
            $this->db->where('category_slug',$category_id);
        }
$this->db->order_by("date_added", "DESC");
$query = $this->db->get("products");

   return $query->result();
}

public function save_pageCount($userData){
    if($userData['page_name'] = 'index' AND $userData['user_ip'] > 0){
        
    } 
    else if($userData['page_name'] ="contact"  AND  $userData['user_ip'] > 0) {

    } else if($userData['page_name'] ="about"  AND $userData['user_ip'] > 0) {

    }  else if($userData['page_name'] ="products" AND $userData['user_ip'] > 0) {

    } else if($userData['page_name'] ="cart"  AND $userData['user_ip'] > 0) {

    } else if($userData['page_name'] ="checkout" AND $userData['user_ip'] > 0) {

    } else if($userData['page_name'] ="login"  AND $userData['user_ip'] > 0) {

    }else{
        return $this->db->insert('page_counter', $userData);
    }
    
}

}
