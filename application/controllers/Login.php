<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('user_model', 'user');
        
        if( $this->session->userdata('logged_in') ){
            // Ursher the person to where he is coming from
            $from = $this->session->userdata('referred_from');
            if( !empty($from) ) redirect($from);
            redirect(base_url());
        }
    }

    public function index(){
        $page_data['title'] = "Login";
        $page_data['page'] = 'login';
        $this->load->view('landing/login', $page_data);
    }

    /*
     * @Incoming : accepts the login POST paramters : email and password
     * */
    public function process() {
        $page_data['page'] = 'login';
        if(!$_POST){
            redirect('login');
        }else {
            // $this->output->enable_profiler(TRUE);
            $this->form_validation->set_rules('loginemail', 'Email Address','trim|required|xss_clean|valid_email');
            $this->form_validation->set_rules('loginpassword', 'Password','trim|required|xss_clean|min_length[6]|max_length[15]');
            $output_array['status'] = 'error';
            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error_msg','There was an error with the login information. Please fix the following <br />' . validation_errors() );
                redirect('login');
            }else{
                $data = array(
                    'email' => $this->input->post('loginemail'),
                    'password' => $this->input->post('loginpassword')
                );

//                var_dump( $data ); exit;

                $user = $this->user->login($data);
                if( !$user ) {
                    $this->session->set_flashdata('error_msg','Sorry! Incorrect username or password.');
                    $this->load->view('landing/login', $page_data);
                }else{
                    // @TODO
                    // Check if the user already have some products in the cart, and going to checkout
                    // Perform every other actions necessary
                    $session_data = array('logged_in' => true, 'logged_id' => $user->id, 'email' => $this->input->post('loginemail'));
                    $this->session->set_userdata($session_data);
                    $this->session->set_flashdata('success_msg','You are now logged in!');
                    $from = $this->session->userdata('referred_from');
                    ( !empty($from) ) ? redirect($from) : redirect(base_url());
                }
            }
        }
    } 

   
}


// User was successfully created and the user needs to verify their account.
// Send registered an email informing them how to validate their account.
// $company_name = $this->config->item('company_name');
// $company_email_address = $this->config->item('company_email');

// $this->load->library('email');
// $this->email->from($company_email_address, $company_name);
// $this->email->to($post_email_address);
// $this->email->subject($company_name.' Registration');
// $message = 'Welcome to '.$company_name.','."\r\n \r\n";
// $message .= 'Thank you for joining the '.$company_name.' Team. ';
// $message .= 'We have listed your registration details below. Make sure you save this email.';
// $message .= 'To verify this account please click the following link.'."\r\n \r\n";
// $message .= anchor('register/verify/'.$registration_key, 'Click Here To Activate Your Account', '')."\r\n";
// $message .= 'Please verfiy your account within 2 hours, otherwise your registration will become invalid and you will have to register again.'."\r\n \r\n";
// $message .= 'Your email address: '.$post_email_address."\r\n";
// $message .= 'Your Password: '.$post_password."\r\n \r\n";
// $message .= 'Enjoy your stay here at '.$company_name.'.'."\r\n \r\n";
// $message .= 'The '.$company_name.' Team';
// $this->email->message($message);
// $this->email->send();

