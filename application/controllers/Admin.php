<?php
class Admin extends CI_Controller{

  public function index(){
    if(!$this->session->userdata('aid')){
        redirect('cw12345login');
      }

    $admin_id = $this->session->userdata('aid');
    $data['account'] = $this->Account_model->account($admin_id);

    $this->load->view('admin/header',$data);
    $this->load->view('admin/index',$data);
    $this->load->view('admin/footer');
  }

  public function login(){
    if($this->session->userdata("aid"))//If already logged in
    {
        redirect('cw12345admin');//redirect to the blog page
    }
    $data['error'] = 0;

    $submit = $this->input->post('submit');
    if(isset($submit)) {

    $this->form_validation->set_rules('fullname', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if($this->form_validation->run())
  {
    if($this->input->post())//data inputed for login
    {
        $fullname = $this->security->xss_clean( $this->input->post('fullname', TRUE));
        $password =$this->security->xss_clean(  $this->input->post('password', TRUE));

        $user = $this->Account_model->login($fullname, $password);
        if(!$user){
          $data['error'] = 1;
        }//when user doesn't exist
        else //when user exist
        {
            $this->session->set_userdata('aid', $user['id']);

            redirect('cw12345admin');
        }
      }
    }

}
$this->load->view('admin/login',$data);

}

public function logout() {
  $this->session->unset_userdata('aid');
  $this->session->unset_userdata('fullname');
  $this->session->set_flashdata('logout', 'Logout successful');
  $this->session->set_userdata($data);
  redirect('cw12345login');

}

public function appoinments(){
  if(!$this->session->userdata('aid')){
    redirect('cw12345login');
  }

$admin_id = $this->session->userdata('aid');
$data['account'] = $this->Account_model->account($admin_id);

  $this->load->view("Admin/header",$data);
  $this->load->view("Admin/appoinments");
  $this->load->view("Admin/footer");
}

public function category(){
  if(!$this->session->userdata('aid')){
    redirect('cw12345login');
  }

$admin_id = $this->session->userdata('aid');
$data['account'] = $this->Account_model->account($admin_id);

$category = new Account_model;
$data['data'] = $category->get_category();

  $this->load->view("Admin/header",$data);
  $this->load->view("Admin/all_categories");
  $this->load->view("Admin/footer");
}

public function products(){
  if(!$this->session->userdata('aid')){
    redirect('cw12345login');
  }

$admin_id = $this->session->userdata('aid');
$data['account'] = $this->Account_model->account($admin_id);

$products = new Account_model;
$data['data'] = $products->get_products();// function to get all products

$category = new Account_model;
$data['all_category'] = $category->get_category(); // function to get all category

  $this->load->view('admin/header',$data);
  $this->load->view('admin/products');
  $this->load->view('admin/footer');

}


public function add_product(){
  if(!$this->session->userdata('aid')){
    redirect('cw12345login');
  }

$admin_id = $this->session->userdata('aid');
$data['account'] = $this->Account_model->account($admin_id);


$category = new Account_model;
$data['all_category'] = $category->get_category(); // function to get all category

/*=======================
Add product to db
*/
$product_image= $this->upload_product_image();

  
$this->form_validation->set_rules('pname', 'Product Name', 'required');
$this->form_validation->set_rules('price', 'Price', 'required');
$this->form_validation->set_rules('pro_cat', 'Category', 'required');
$this->form_validation->set_rules('desc', 'Description', 'required');

$submit = $this->input->post('save');
  if(isset($submit)) {
if($this->form_validation->run())
{
if($product_image==NULL){
  redirect("cw12345admin/add-products");
}else{


$image = $this->Account_model->add_product_model($product_image);
$this->session->set_flashdata("success","<font class='success'>Product Added Successfully</font>");
redirect('cw12345admin/products');
   }
 }
}
    //End of product configuration
$this->load->view('admin/header',$data);
$this->load->view('admin/add_product',$data);
$this->load->view('admin/footer');
}

// insert Product
public function insert_product(){

}

// image validation
private function upload_product_image(){
  $config['upload_path']          = './asset/img/';
      $config['allowed_types']        = 'png|gif|jpg|jpeg';
      $config['max_size']             = 1000;//kb
      $config['max_width']            = 2000;
      $config['max_height']           = 1600;
      $this->load->library('upload', $config);
      if($this->upload->do_upload('pro_image')){
        $data = $this->upload->data();
        $image_path = "$data[file_name]";
        return $image_path;
      }else{
          $error =  $this->upload->display_errors();
        $this->session->set_userdata('error_image',$error);
        //redirect("Product/add_product_form");
      }

}
//Add New Category

public function add_category(){
  if(!$this->session->userdata('aid')){
    redirect('cw12345login');
  }

$admin_id = $this->session->userdata('aid');
$data['account'] = $this->Account_model->account($admin_id);
 
$data['error'] = NULL;
if($this->input->post())
{
    $config = array(
        array(
            'field' => 'category_name',
            'label' => 'Category name',
            'rules' => 'trim|required|min_length[5]'//is unique username in the user's table of DB
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
            'password' => sha1($this->input->post('password')),

        );
        $user_id = $this->Account_model->create_user($data);
        $this->session->set_flashdata('success','Admin Created successfully');
        redirect('cw12345admin/add-category');
    }

}

  $this->load->view('admin/header',$data);
  $this->load->view('admin/add_category');
  $this->load->view('admin/footer');
}

//Add  New Admin
public function add_admin(){
  if(!$this->session->userdata('aid')){
    redirect('cw12345login');
  }

$admin_id = $this->session->userdata('aid');
$data['account'] = $this->Account_model->account($admin_id);
 
$data['error'] = NULL;
if($this->input->post())
{
    $config = array(
        array(
            'field' => 'fullname',
            'label' => 'Admin Fullname',
            'rules' => 'trim|required|min_length[5]|is_unique[admin_users.fullname]',//is unique username in the user's table of DB
             'errors' => array('is_unique' => 'Fullname already exist')
          ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required|min_length[8]|max_length[20]'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|is_unique[admin_users.email]|valid_email',//is unique email in the user's table of DB
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
            'password' => sha1($this->input->post('password')),

        );
        $user_id = $this->Account_model->create_user($data);
        $this->session->set_flashdata('success','Admin Created successfully');
        redirect('cw12345admin/add-admin');
    }

}

  $this->load->view('admin/header',$data);
  $this->load->view('admin/add_admin');
  $this->load->view('admin/footer');
}

public function all_admin(){
  if(!$this->session->userdata('aid')){
    redirect('cw12345login');
  }

$admin_id = $this->session->userdata('aid');
$data['account'] = $this->Account_model->account($admin_id);


$All_admin = new Account_model; // Getting All Admin Details
$data['data'] = $All_admin->get_Admin();

$this->load->view('admin/header',$data);
$this->load->view('admin/all_admin',$data);
$this->load->view('admin/footer');
}


public function edit($id)
{
  if(!$this->session->userdata('aid')){
    redirect('cw12345login');
  }

$admin_id = $this->session->userdata('aid');
$data['account'] = $this->Account_model->account($admin_id);

    $admin_users = $this->db->get_where('admin_users', array('id' => $id))->row();
    $this->load->view('admin/header',$data);
    $this->load->view('admin/edit',array('admin_users'=>$admin_users));
    $this->load->view('admin/footer');   
}

// Delete Product
public function delete_product(){
  if(!$this->session->userdata('aid')){
    redirect('cw12345login');
  }

$admin_id = $this->session->userdata('aid');
$data['account'] = $this->Account_model->account($admin_id);

  $id = $this->input->get('id');
  $response = $this->Account_model->deleterecords($id);
  if($response==true){
  $this->session->set_flashdata('success','Product Deleted Successfully');
  redirect('cw12345admin/products');

  }else{
    $this->session->set_flashdata('success','Product Deleted Successfully');
    redirect('cw12345admin/products');

  }
}
}