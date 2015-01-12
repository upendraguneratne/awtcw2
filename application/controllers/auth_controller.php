<?php

class Auth_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('authlib');
        $this->load->helper('url');
    }

    public function register() {
        $data['errmsg'] = '';
        $data['profiletype'] = $this->authlib->getUserType();
        $this->load->view('registration_view', $data);
    }

    public function UserProfile() {
        $data['errmsg'] = '';
        $this->load->view('ProfileView', $data);
    }

    public function createaccount() {
        $category = $this->input->post('category');
        $firstname = $this->input->post('fname');
        $lastname = $this->input->post('lname');
        $email = $this->input->post('email');
        $password = $this->input->post('pword');
        $conf_password = $this->input->post('conf_pword');
        $remember_me = $this->input->post('remember');

        if ($category != 0) {
            if (!($errmsg = $this->authlib->register($category, $firstname, $lastname, $email, $password, $conf_password, $remember_me))) {
                $data['errmsg'] = "Successfully Registered Please Login to continue ";
                $this->load->view('login_view', $data);
            } else {
                $data['errmsg'] = $errmsg;
                $this->load->view('registration_view', $data);
            }
        }else{
            $data['errmsg'] ="Please Select User Category";
                $data['profiletype'] = $this->authlib->getUserType();
        $this->load->view('registration_view', $data);
        }
    }

    public function login() {
        $data['errmsg'] = '';
        $this->load->view('login_view', $data);
    }

    public function logout() {
        $sessionarray = array(
            'userid' => 0,
            'username' => 'Guest'
        );
        $this->session->set_userdata($sessionarray);

        //$this->load->view('GuestView');
        redirect('/search_controller/search');
    }

    public function authenticate() {
        $username = $this->input->post('uname');
        $password = $this->input->post('pword');
        $loginInfo = $this->authlib->login($username, $password);
        if ($loginInfo > 0) {
            $uid = 0;
            $uid = $loginInfo['user_id'];
            $userInfo = $this->authlib->getUserInfo($uid);
            $uname = 'Guest';
            $uname = $userInfo['firstname'];
            $lname = $userInfo ['lastname'];
            
            $sessionarray = array(
                'userid' => $uid,
                'username' => $uname,
                'lastname' => $lname   
            );
            $this->session->set_userdata($sessionarray);
            //  $this->load->view('home_view');
            // $this->question_controller->HomePage();
            redirect('/question_controller/HomePage');
        } else {
            $data['errmsg'] = 'Unable to login - please try again';
            $this->load->view('login_view', $data);
        }
    }

}
