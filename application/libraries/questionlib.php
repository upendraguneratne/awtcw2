<?php

class Questionlib {

    function __construct() {
        // get a reference to the CI super-object, so we can
        // access models etc. (because we don't extend a core
        // CI class)
        $this->ci = &get_instance();

        $this->ci->load->model('question');
    }

    public function insertQtn($title, $description, $category, $tag) {
       
        $data = '';
         if($title == ''){
             $data .= 'Title cannot be empty<br>';
         }
//        if($description == ''){
//             $data .= 'Description cannot be empty<br>';
//         }
         if($category == 0){
             $data .= 'Category cannot be empty<br>';
         }

        
        if($data == ''){
            return $this->ci->question->insertQt($title, $description, $category, $tag);
        }else{
            return $data;
        }
    }
    
    public function getAllCategory(){
        return $this->ci->question->getAllCat();
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

