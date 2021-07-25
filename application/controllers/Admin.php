<?php
class Admin extends CI_Controller{
public function __construct(){
parent::__construct();


}
  public function index(){
    if(!$this->session->userdata('id')){
        redirect('cw12345login');
      }

    $admin_id = $this->session->userdata('id');
    $data['account'] = $this->Account_model->account($admin_id);

    $this->load->view('admin/header',$data);
    $this->load->view('admin/index',$data);
    $this->load->view('admin/footer');
  }

  public function login(){
    if($this->session->userdata("id"))//If already logged in
    {
        redirect('cw12345admin');//redirect to the blog page
    }
    $data['error'] = 0;

    $submit = $this->input->post('submit');
    if(isset($submit)) {

    $this->form_validation->set_rules('fullname', 'Fullname', 'required');
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
            $this->session->set_userdata('id', $user['id']);
            $this->session->set_userdata('fullname', $user['fullname']);

            redirect('cw12345admin');
        }
      }
    }

}
$this->load->view('admin/login',$data);

}

public function logout() {
  $this->session->unset_userdata('id');
  $this->session->unset_userdata('fullname');
  $this->session->set_flashdata('logout', 'Logout successful');
  $this->session->set_userdata($data);
  redirect('cw12345login');

}

public function products(){
  if(!$this->session->userdata('id')){
    redirect('cw12345login');
  }

$admin_id = $this->session->userdata('id');
$data['account'] = $this->Account_model->account($admin_id);

$products = new Account_model;
$data['data'] = $products->get_products();

  $this->load->view('admin/header',$data);
  $this->load->view('admin/products');
  $this->load->view('admin/footer');

}

public function add_product(){
  if(!$this->session->userdata('id')){
    redirect('cw12345login');
  }

$admin_id = $this->session->userdata('id');
$data['account'] = $this->Account_model->account($admin_id);


//Add new Product 

$this->load->view('admin/header',$data);
$this->load->view('admin/add_product',$data);
$this->load->view('admin/footer');
}


public function add_admin(){
  if(!$this->session->userdata('id')){
    redirect('cw12345login');
  }

$admin_id = $this->session->userdata('id');
$data['account'] = $this->Account_model->account($admin_id);
 
$data['error'] = NULL;
if($this->input->post())
{
    $config = array(
        array(
            'field' => 'fullname',
            'label' => 'Admin Fullname',
            'rules' => 'trim|required|is_unique[admin_users.fullname]|min_length[5]'//is unique username in the user's table of DB
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
  if(!$this->session->userdata('id')){
    redirect('cw12345login');
  }

$admin_id = $this->session->userdata('id');
$data['account'] = $this->Account_model->account($admin_id);


$All_admin = new Account_model; // Gettimng All Admin Details
$data['data'] = $All_admin->get_Admin();

$this->load->view('admin/header',$data);
$this->load->view('admin/all_admin',$data);
$this->load->view('admin/footer');
}


public function edit($id)
{
  if(!$this->session->userdata('id')){
    redirect('cw12345login');
  }

$admin_id = $this->session->userdata('id');
$data['account'] = $this->Account_model->account($admin_id);

    $admin_users = $this->db->get_where('admin_users', array('id' => $id))->row();
    $this->load->view('admin/header',$data);
    $this->load->view('admin/edit',array('admin_users'=>$admin_users));
    $this->load->view('admin/footer');   
}

}