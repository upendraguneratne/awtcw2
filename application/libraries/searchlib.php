<?php

class Searchlib {

    function __construct() {
        $this->ci = &get_instance();
        $this->ci->load->model('question');
        $this->ci->load->model('search');
    }
     public function getAllRecentQts(){
        
        return $this->ci->question->getAllRecQts();
    }
    public function getAllRecentQtnTag(){
        
        return $this->ci->question->getAllRecentQtnTag();
    }
    
    public function getAllTagName(){
        
        return $this->ci->question->getAllTagName();
    }
    
    public function getSearch_json($qTitle,$qTag,$sType){
        $searchItem = $this->ci->search->getBySearchItem_json($qTitle,$qTag,$sType);
        return $searchItem;
    }

//    public function register($cat, $fname, $lname, $uemail, $upassword, $uconf_password, $remember) {
//        if ($upassword != $uconf_password) {
//            return "Passwords do not match<br>";
//        } else {
//            $cduplicate = $this->ci->user->check_duplicate($uemail);
//            if ($cduplicate != '') {
//                return $cduplicate;
//            }
//        }
//        return $this->ci->user->register($cat, $fname, $lname, $uemail, $upassword, $remember);
//    }
//
//    public function login($user, $pwd) {
//        return $this->ci->user->login($user, $pwd);
//    }

}
