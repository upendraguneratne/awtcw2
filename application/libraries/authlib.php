<?php

class Authlib {

    function __construct() {
        $this->ci = &get_instance();
        $this->ci->load->model('user');
    }

    public function register($cat, $fname, $lname, $uemail, $upassword, $uconf_password, $remember) {
        if ($upassword != $uconf_password) {
            return "Passwords do not match<br>";
        } else {
            $cduplicate = $this->ci->user->check_duplicate($uemail);
            if ($cduplicate != '') {
                return $cduplicate;
            }
        }
        return $this->ci->user->register($cat, $fname, $lname, $uemail, $upassword, $remember);
    }

    public function login($user, $pwd) {
        return $this->ci->user->login($user, $pwd);
    }

    public function getUserInfo($userId){
        
        return $this->ci->user->getUserInfo($userId);
    }
    
    public function getUserType(){
        return $this->ci->user->getUserType();
    }
    
    
}
