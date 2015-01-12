<?php

class Answerlib {

    function __construct() {
        // get a reference to the CI super-object, so we can
        // access models etc. (because we don't extend a core
        // CI class)
        $this->ci = &get_instance();

        $this->ci->load->model('answer');
    }

    public function insertanswer($ans) {
       
        $data = '';
         if($ans == ''){
             $data .= 'Title cannot be empty<br>';
         }
     
        if($data == ''){
            return $this->ci->answer->insertAns($ans);
        }else{
            return $data;
        }
    }
    
    public function getQtsById($qiD){
        return $this->ci->answer->getQtsById($qiD);
    }
    
     public function getAllRecentQtnTag(){
        
        return $this->ci->answer->getAllRecentQtnTag();
    }
    
    public function getAllTagName(){
        
        return $this->ci->answer->getAllTagName();
    }
    public function getAnsById($questionID){
        return $this->ci->answer->getAnswerById($questionID);
    }

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

