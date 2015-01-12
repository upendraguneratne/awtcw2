<?php

class Search extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    
    function getBySearchItem_json($qTitle,$qTag,$sType){
        
        $this->db->distinct('t1.title');
            $this->db->select('t1.title, t1.noofanswers, t1.views , t1.posteddate, t1.questionid, t4.firstname,t4.lastname,t4.user_id,t1.userid');
            $this->db->from('question AS t1 ');
            $this->db->join('tagdetail AS t2','t1.questionid=t2.questionid');
            $this->db->join('tagmaster as t3','t2.tagmasterid=t3.tagid');
            $this->db->join('users as t4','t1.userid=t4.user_id');
            $this->db->like('t1.title',trim($qTitle));
            $this->db->like('t3.tagname', trim($qTag));
        
        if($sType == 1 ){
            $this->db->order_by('t1.posteddate', "desc");
        }else if($sType == 2 ){
            $this->db->order_by('t1.noofanswers', "desc");
            
        }else if($sType == 3){
            $this->db->order_by('t1.views', "desc");
        }
        
        $res = $this->db->get();
        if ($res->num_rows() > 0) {
            return $res;
        }
        
    }
    
    
    
    
    
    
//        function getAllRecQts() {
//        $this->db->select('*');
//        $this->db->from('question');
//        $this->db->join('users', 'question.userid = users.user_id');
//        $this->db->order_by("question.posteddate","desc");
//        $this->db->limit(10,0);
//        $res = $this->db->get();
//        if ($res->num_rows() > 0) {
//            return $res;
//        }
//    }
//
//    function getAllRecentQtnTag() {
//       
//        $resTag = $this->db->get('tagdetail');
//        if ($resTag->num_rows() > 0) {
//             return $resTag;
//        }
//    }
//    function getAllTagName() {
//        $res = $this->db->get('tagmaster');
//        if ($res->num_rows() > 0) {
//            return $res;
//        }
//    }

//    
//function check_duplicate($email){
//        // is email unique?
//        $res = $this->db->get_where('logins', array('email' => $email));
//        if ($res->num_rows() > 0) {
//            return 'User already exists in the system';
//        }
//        
//    }
//    function login($username, $pwd) {
//
//        $session_id = $this->session->userdata('session_id');
//        $res = $this->db->get_where('logins',array('email' => $username, 'password' => $pwd));
//            if ($res->num_rows() != 1) { // should be only ONE matching row!!
//                return false;
//            }else {
//                $row = $res->row_array();
//                $uid = $row['user_id'];
//
//                $data = array('session_id' => $session_id);
//                $this->db->where('user_id',$uid);
//                $this->db->update('logins',$data);
//                return $row;
//            }
//
//        }
//        
//
//    
//
//    function is_loggedin() {
//        $session_id = $this->session->userdata('session_id');
//        $res = $this->db->get_where('logins', array('session_id' => $session_id));
//        if ($res->num_rows() == 1) {
//            $row = $res->row_array();
//            return $row['user_id'];
//        } else {
//            return false;
//        }
//    }
}

/*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

    