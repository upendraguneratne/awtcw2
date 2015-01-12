<?php

class Notificationlib {

    function __construct() {
        // get a reference to the CI super-object, so we can
        // access models etc. (because we don't extend a core
        // CI class)
        $this->ci = &get_instance();

        $this->ci->load->model('notification');
    }

//    public function register($cat, $fname, $lname, $uemail, $upassword, $uconf_password,$remember) {
//       
//               
//        if ($upassword != $uconf_password) {
//            return "Passwords do not match<br>";
//        } else{
//        $cduplicate = $this->ci->user->check_duplicate($uemail);
//            if($cduplicate != ''){
//                return $cduplicate;
//            }
//        }
//        return $this->ci->user->register($cat, $fname, $lname, $uemail, $upassword,$remember);
//        
//       
//        
//    }
//
//    public function login($user, $pwd) {
//        return $this->ci->user->login($user, $pwd);
//    }
//
//    public function is_loggedin() {
//        return $this->ci->user->is_loggedin();
//    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

