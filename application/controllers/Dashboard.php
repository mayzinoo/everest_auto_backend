<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Dashboard extends CI_Controller
{
    function __construct() 
    {
      parent::__construct();
      error_reporting(1);   
    }
    function index()
      { 
        $this->load->view("welcome_message");
      }    
    
    function user_register()
      {
        $data['content']="register";
        $this->load->view("template",$data);
      }
    function forgotpassword()
    {
      $this->load->view("forgetpwd");
    }
    
    function update_userstatus()
    {
      $id=$this->input->post("id");
      $data = array(
                  'role' => "dealer"
                );
      $this->db->where('id',$id);
      $this->db->update("users",$data);

      echo json_encode(array("status" => TRUE));
    }

    function cancel_userstatus()
    {
      $id=$this->input->post("id");
      $data = array(
                  'role' => ""
                );
      $this->db->where('id',$id);
      $this->db->update("users",$data);

      echo json_encode(array("status" => TRUE));
    }

    

    function user_resetpassword()
    {
        $email=$this->input->post("email");

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('email'=>$email));
        $query=$this->db->get();
        $user=$query->row();

        if($user){            
                 
            $this->email->from("mayzinoo2114@gmail.com","Everest Auto");
            $this->email->to($email);
            $this->email->reply_to($email);
            $this->email->subject("Get Your Password");
            $this->email->message("Thanks for contacting regarding to forgot password and Password Here- ");           
            if($this->email->send())
               {
                  echo "<script>
                      alert('Successfully Sent Your Email');        
                  </script>";
                  redirect('dashboard/forgotpassword',"refresh");
               }
               else
              {
               show_error($this->email->print_debugger());
              }
        }
    }

    private function _do_upload()
    {
        $this->load->helper('file'); 
        $this->load->library('upload'); 
                
        $config['upload_path']          = 'upload/files/';
        $config['allowed_types']        = 'jpg|png|jpeg';   
        $config['remove_spaces']=TRUE;

        if(!file_exists($config['upload_path'])){
            mkdir($config['upload_path'], 0777);
        }
        $this->upload->initialize($config);
 
       if(!$this->upload->do_upload('photo')) //upload and validate
        {
            $data['inputerror'][] = 'photo';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }

    public function sendinginvoice()
      {
        $email=$this->input->post('email');
        $fullname=$this->input->post('fullname');
        $subject=$this->input->post('subject');
      //      $cvattach=$this->input->post('cvattach');
      $cvattach=$_FILES['cvattach']['tmp_name'];
        $this->load->library('email');

        $this->email->from($email, $fullname);
        $this->email->to('mayzinoo2114@gmail.com');
        /*$this->email->cc('another@another-example.com');
        $this->email->bcc('them@their-example.com');*/

        $this->email->subject($subject);
        $this->email->attach($cvattach);
        $this->email->send();
      }

    function register()
      {
        $post = $this->input->post();
        $email=$post["email"];
        if(!empty($post)) {
            if(!$is_exist) {
                      $user = array(
                          "first_name" => $post["name"],
                          "email" => $post["email"],
                          "password" => password_hash($post["password"], PASSWORD_DEFAULT),
                      );
                      $this->db->select('*');
                      $this->db->from('users');
                      $this->db->where(array('email'=>$email));
                      $query=$this->db->get();

                      if($query->num_rows()==1)
                      { 
                        echo "<script>
                          alert('Already Registered!');
                          window.location.href='http://admin.everestauto.com.sg/dashboard/users';
                          </script>"; 
                      }else{
                        $this->db->insert("users", $user);
                        $this->session->set_flashdata('success', 'User has been created.');
                      }
                
            } else {
                $this->session->set_flashdata('error', 'Email already exists.');
            }

        }
        redirect('/');
      }
    function user_login()
      {  
        $email=$this->input->post("email");
        $password=$this->input->post("password");
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('email'=>$email));
        $query=$this->db->get();

        if($query->num_rows()==1)
        {
            $user=$query->row();

            if($user) {

                    $verify = password_verify($password, $user->password);
                      if($verify) {
                          $data=array(
                                  'id'=>$user->id,
                                  'firstname'=>$user->first_name,
                                  'name'=>$user->first_name.' '.$user->last_name,
                                  'email'=>$user->email,
                                  'password'=>$user->password,
                                  'role'=>$user->role
                                );
                              $this->session->set_userdata($data); 
                          if($user->role=='sale'){
                            redirect("priceslist/allpricelist/","refresh");
                          }else{
                            redirect("leasing/","refresh");
                          }
                          
                              
                    }else
                    {
                       echo "<script>
                      alert('Username and Password do not match!');
                      
                      </script>";
                      redirect('/',"refresh");
                    }
              }
        }else
              {
                 echo "<script>
                alert('No User!');
                
                </script>";
                redirect('/',"refresh");
              }
        
      }      
      
    function logout()
      {
          session_destroy();
          redirect('dashboard/',"refresh");
      }

}

?>