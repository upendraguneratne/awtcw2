<?php

class User extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function check_duplicate($email){
        // is email unique?
        $res = $this->db->get_where('logins', array('email' => $email));
        if ($res->num_rows() > 0) {
            return 'User already exists in the system';
        }
        
    }

    function register($cat, $fname, $lname, $uemail, $pwd,$rem) {
       
        //users table
        $data = array(
            'firstname' => $fname, 
            'lastname' => $lname,
            'userTypeId' => 1,
            'ActivityId' => 1,
            'notificationId' => 1
         );
        $this->db->insert('users', $data);
        $str = $this->db->insert_id();
        
        // logins table
         $data = array(
            'user_id' =>  $str, 
            'email' => $uemail,
            'remember_me' => $rem,
            'password' => $pwd
         );
        $this->db->insert('logins', $data);
        
        return null; // no error message because all is ok
    }

    function login($username, $pwd) {

        $session_id = $this->session->userdata('session_id');
        $res = $this->db->get_where('logins',array('email' => $username, 'password' => $pwd));
            if ($res->num_rows() != 1) { // should be only ONE matching row!!
                return false;
            }else {
                $row = $res->row_array();
                $uid = $row['user_id'];

                $data = array('session_id' => $session_id);
                $this->db->where('user_id',$uid);
                $this->db->update('logins',$data);
                return $row;
            }

        }
        
    function getUserInfo($userId){
        
        $res = $this->db->get_where('users',array('user_id' => $userId));
        if ($res->num_rows() != 1) { // should be only ONE matching row!!
                return false;
            }else {
                $row = $res->row_array();
                return $row;
            }
    }

    

    function is_loggedin() {
        $session_id = $this->session->userdata('session_id');
        $res = $this->db->get_where('logins', array('session_id' => $session_id));
        if ($res->num_rows() == 1) {
            $row = $res->row_array();
            return $row['user_id'];
        } else {
            return false;
        }
    }
    function getUserType() {
        $res = $this->db->get('user_type');
        if ($res->num_rows() > 0) {
            return $res;
        }
    }
    

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

