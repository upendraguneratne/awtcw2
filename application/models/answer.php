<?php

class Answer extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function insertAns($ans) {

        date_default_timezone_set('Asia/Colombo');
        //question table
        $data = array(
            'answer' => $ans,
            'questionid' => $this->session->userdata('qid'),
            'posteddate' => date("Y-m-d H:i:s"),
            'userid' => $this->session->userdata('userid')
        );

        $this->db->insert('answer', $data);
        
        $resTag = $this->db->get_where('question', array('questionid' => $this->session->userdata('qid')));
        if ($resTag->num_rows() > 0) {
             $row = $resTag->row_array();
                $noofanswers= $row['noofanswers'];
                $noofanswers ++;
                
                $data = array('noofanswers' => $noofanswers);
                $this->db->where('questionid',$this->session->userdata('qid'));
                $this->db->update('question',$data);
        }
        
        return null; // no error message because all is ok
    }

    function getQtsById($qtniD) {
        $this->db->select('*');
        $this->db->from('question');
        $this->db->join('users', 'question.userid = users.user_id');
        $this->db->where('question.questionid',$qtniD);
        
        $res = $this->db->get();
        
         $resTag = $this->db->get_where('question', array('questionid' => $qtniD));
        if ($resTag->num_rows() > 0) {
             $row = $resTag->row_array();
                $views= $row['views'];
                $views ++;
                
                $data = array('views' => $views);
                $this->db->where('questionid',$qtniD);
                $this->db->update('question',$data);
        }
        
        
       
        if ($res->num_rows() > 0) {
            return $res;
        }
    }
    
    
    function getAnswerById($questionID) {
        
        $this->db->select('*');
        $this->db->from('answer');
        $this->db->join('users', 'answer.userid = users.user_id');
        $this->db->where('answer.questionid',$questionID);
        
        $res = $this->db->get();
        if ($res->num_rows() > 0) {
            return $res;
        }
    }
    
    function getAllRecentQtnTag() {
       
        $resTag = $this->db->get('tagdetail');
        if ($resTag->num_rows() > 0) {
             return $resTag;
        }
    }
    function getAllTagName() {
        $res = $this->db->get('tagmaster');
        if ($res->num_rows() > 0) {
            return $res;
        }
    }



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

    