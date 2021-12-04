<?php
class Dashboard_controller extends CI_Controller {
   public function __construct(){
       parent::__construct();
       $this->load->model('User_model');
       $this->load->library('email');

       if(!$this->session->userdata("id"))//If already logged in
    {
        redirect(base_url());//redirect to the blog page
    }
   

   } 

public function order(){
     $this->load->model('OrdersModel');
        $this->load->model('OrderProductModel');
        
     $accountNo=$this->session->userdata('id');
     $data['account'] = $this->Account_model->user_account($accountNo);
     $data['title'] = "My Order - Dove Multinational Investment";
    $data['desc'] = "";
    
     $orders = $this->OrdersModel->getUserOrders( $accountNo);

        $data['orders'] = $orders;
        $order_ids = $this->OrdersModel->getUserOrderIds( $accountNo);
        $data['order_products'] = $this->OrderProductModel->getProductsByOrderIds($order_ids);
        $data['user'] = "";
        
     $this->load->view('config/header',$data);
     $this->load->view('User_Details/order');
     $this->load->view('config/footer');
}

public function address(){
     $accountNo=$this->session->userdata('id');
                  $data['account'] = $this->Account_model->user_account($accountNo);
    $data['title'] = "";
    $data['desc'] ="";
       
       $data['address'] = $this->Account_model->get_address($accountNo);
    
        $this->load->view('config/header',$data);
        $this->load->view('User_Details/address',$data);
        $this->load->view('config/footer');
}
//Create address
public function address_create(){
    $accountNo=$this->session->userdata('id');
    $data['account'] = $this->Account_model->user_account($accountNo);
    $data['title'] = "Dove Pharmaticals and Equiptments";
    $data['desc'] = "";
    $data['error'] = NULL;
if($this->input->post())
{
    $config = array(
        
            array(
            'field' => 'country',
            'label' => 'Country',
            'rules' => 'trim|required|min_length[3]|max_length[20]'
        ),
        
          array(
            'field' => 'address',
            'label' => 'Address',
            'rules' => 'trim|required|min_length[5]|max_length[200]'
        ),
         array(
            'field' => 'town/city',
            'label' => 'Town/City',
            'rules' => 'trim|required|min_length[5]|max_length[200]'
        ),
         array(
            'field' => 'state',
            'label' => 'State',
            'rules' => 'trim|required|min_length[1]|max_length[200]'
        ),
         array(
            'field' => 'postcode/zip',
            'label' => 'Postcode/Zip',
            'rules' => 'trim|required|min_length[5]|max_length[20]'
        ),
         array(
            'field' => 'phone',
            'label' => 'Phone Number',
            'rules' => 'trim|required|min_length[5]|max_length[20]'
        ),
        array(
             'field' => 'user_id',
            'rules' => 'is_unique[address_book.user_id]',
             'errors' => array('is_unique' => 'Address Created already for this user')

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
            'user_id' => $this->session->userdata('id'),
             'country' => $this->input->post('country'),
              'address' => $this->input->post('address'),
               'town/city' => $this->input->post('town/city'),
                'state' => $this->input->post('state'),
                 'postcode/zip' => $this->input->post('postcode/zip'),
            'phone' => $this->input->post('phone'),

        );
                  $order_id =   $this->User_model->insert_address($data);
                  redirect('dashboard/address');
       }

    }
    
      $this->load->view('config/header',$data);
        $this->load->view('User_Details/address_create',$data);
        $this->load->view('config/footer');
}
//Edit address
public function address_edit(){
      $data['title'] = "Edit Address";
       $data['desc'] = "Edit Address";
             $accountNo=$this->session->userdata('id');
       $data['account'] = $this->Account_model->user_account($accountNo);
                  $data['get_address'] = $this->User_model->get_address($accountNo);
                  $data['error'] = NULL;

                  if($this->input->post())
                  {
                      $config = array(
        
            array(
            'field' => 'country',
            'label' => 'Country',
            'rules' => 'trim|required|min_length[3]|max_length[20]'
        ),
        
          array(
            'field' => 'address',
            'label' => 'Address',
            'rules' => 'trim|required|min_length[5]|max_length[200]'
        ),
         array(
            'field' => 'town/city',
            'label' => 'Town/City',
            'rules' => 'trim|required|min_length[5]|max_length[200]'
        ),
         array(
            'field' => 'state',
            'label' => 'State',
            'rules' => 'trim|required|min_length[1]|max_length[200]'
        ),
         array(
            'field' => 'postcode/zip',
            'label' => 'Postcode/Zip',
            'rules' => 'trim|required|min_length[5]|max_length[20]'
        ),
         array(
            'field' => 'phone',
            'label' => 'Phone Number',
            'rules' => 'trim|required|min_length[5]|max_length[20]'
        ),
        array(
             'field' => 'user_id',
            'rules' => 'is_unique[address_book.user_id]',
             'errors' => array('is_unique' => 'Address Created already for this user')

            ),

        
                    );
                    $this->load->library('form_validation');
                    $this->form_validation->set_rules($config);
                    if($this->form_validation->run() == FALSE)
                    {
                        $data['error'] = validation_errors();
                    }
                    else
                    {
                        $data = array(
                        'country' => $this->input->post('country'),
                        'address' => $this->input->post('address'),
                         'town/city' => $this->input->post('town/city'),
                        'state' => $this->input->post('state'),
                        'postcode/zip' => $this->input->post('postcode/zip'),
                          'phone' => $this->input->post('phone'),

                        );
                        $user_id = $this->User_model->edit_address($data,$accountNo);



                         $this->session->set_flashdata('success', 'Address Edited successfully');
                        redirect('dashboard/address');
                    }

                }
                 $this->load->view('config/header',$data);
     $this->load->view('User_Details/edit-address');
     $this->load->view('config/footer');
}
//Edit user profile
   public function editprofile(){
       $data['title'] = "Edit Profile";
       $data['desc'] = "Edit personnall details like email, fullname and phone numbers";
          $accountNo=$this->session->userdata('id');
                  $data['account'] = $this->Account_model->user_account($accountNo);
                  $data['error'] = NULL;

                  if($this->input->post())
                  {
                    $config = array(
                        array(
                            'field' => 'fullname',
                            'label' => 'Fullname',
                            'rules' => 'trim|required|min_length[5]'//is unique username in the user's table of DB
                        ),
                     array(
                            'field' => 'phone',
                            'label' => 'Phone number',
                            'rules' => 'trim|required|min_length[11]|max_length[11]'//is unique username in the user's table of DB
                        ), 


                    );
                    $this->load->library('form_validation');
                    $this->form_validation->set_rules($config);
                    if($this->form_validation->run() == FALSE)
                    {
                        $data['error'] = validation_errors();
                    }
                    else
                    {
                        $data = array(
                            'fullname' => $this->input->post('fullname'),
                            'phone' => $this->input->post('phone'),
                            // 'email' => $this->input->post('email'),

                        );
                        $user_id = $this->User_model->edit($data,$accountNo);



                         $this->session->set_flashdata('success', 'Profile Edited successfully');
                        redirect('dashboard/edit-profile');
                    }

                }
                 $this->load->view('config/header',$data);
     $this->load->view('User_Details/edit-profile');
     $this->load->view('config/footer');
                }
                
                //Change password
      public function change_pass()
	{
     $data['title'] = "Change password";
       $data['desc'] = "Change Current password";
    $accountNo=$this->session->userdata('id');
    $data['account'] = $this->Account_model->user_account($accountNo);

    $this->load->library('form_validation');
    if(!$this->input->post('change_pass'))
		{
    $this->form_validation->set_rules('oldpass', 'old password', 'callback_password_check','min_length[8]');
    $this->form_validation->set_rules('newpass', 'new password', 'required', 'min_length[8]');
    $this->form_validation->set_rules('passconf', 'confirm password', 'required|matches[newpass]','min_length[8]');

    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

    if($this->form_validation->run() == false) {
        $this->load->view('config/header', $data);
        $this->load->view('User_Details/change_pass', $data);
        $this->load->view('config/footer', $data);
    }
    else {


        $newpass = $this->input->post('newpass');

        $this->User_model->update_user($accountNo, array('password' => sha1($newpass)));
        $this->session->set_flashdata('success', 'Password Changed successfully');

       redirect('dashboard/change-password');
    }
    
  
    }
  }
    public function password_check($oldpass)
    {
       $accountNo=$this->session->userdata('id');
    $data['account'] = $this->Account_model->user_account($accountNo);

        $user = $this->User_model->get_user($accountNo);

        if($user->password !== sha1($oldpass)) {
            $this->form_validation->set_message('password_check', 'The {field} does not match');
            return false;
        }

        return true;
    }
}