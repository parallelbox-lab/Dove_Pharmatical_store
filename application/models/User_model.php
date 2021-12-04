<?php
class User_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
 //insert into user table
    function insertUser($data)
    {
        return $this->db->insert('users', $data);
    }
    
    //send verification email to user's email id
    function sendEmail($to_email)
    {
        
    }
    
    //Edit user profile
    public function edit($data,$accountNo)
	{
		$this->db->where('id',$accountNo);
		$this->db->update('users',$data);
    }

    //Validate user
    function login($email, $password)
    {
        $match = array(
            'email'=>$email,
            'password' => sha1($password),

        );

        $this->db->select()->from('users')->where($match);
        $query = $this->db->get();
        return $query->first_row('array');
    }
    //activate user account
    function verifyEmailID($key)
    {
        $data = array('status' => 1);
        $this->db->where('md5(email)', $key);
        return $this->db->update('users', $data);
    }
    
     public function get_address($id){
     	$this->db->where('user_id',$id);
		$result = $this->db->get('address_book');
		return $result->row_array();
 }
    
    function insert_address($data){
        
                return $this->db->insert('address_book', $data);

    }
    
       //Edit user profile
    public function edit_address($data,$accountNo)
	{
		$this->db->where('user_id',$accountNo);
		$this->db->update('address_book',$data);
    }
    
    //Get user details foor password change
       public function get_user($accountNo)
    {
        $this->db->where('id', $accountNo);
        $query = $this->db->get('users');
        return $query->row();
    }
    
    //Change password
    public function update_user($accountNo, $userdata)
    {
        $this->db->where('id', $accountNo);
        $this->db->update('users', $userdata);
    }
}
?>
