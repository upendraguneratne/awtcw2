<?php

class Question extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function insertQt($title, $description, $category, $tag) {

        date_default_timezone_set('Asia/Colombo');
        //question table
        $data = array(
            'title' => $title,
            'description' => $description,
            'posteddate' => date("Y-m-d H:i:s"),
            'userid' => $this->session->userdata('userid'),
            'categoryid' => $category
        );

        $this->db->insert('question', $data);
        $qtid = $this->db->insert_id();



        //tagmaster table
        $tagarray = explode(',', $tag);
        if (count($tagarray) > 0) {
            for ($x = 0; $x < count($tagarray); $x++) {
                $tag_id = $this->uniqueTag($tagarray[$x]);

                if ($tag_id == 0) {
                    $datamaster = array(
                        'tagname' => $tagarray[$x]
                    );
                    $this->db->insert('tagmaster', $datamaster);
                    $tag_id = $this->db->insert_id();

                    //tagdetail table
                    $datadetail = array(
                        'questionid' => $qtid,
                        'tagmasterid' => $tag_id
                    );
                    $this->db->insert('tagdetail', $datadetail);
                } else {
                    //tagdetail table
                    $datadetail = array(
                        'questionid' => $qtid,
                        'tagmasterid' => $tag_id
                    );
                    $this->db->insert('tagdetail', $datadetail);
                }
            }
        }

        return null; // no error message because all is ok
    }

    function uniqueTag($tagname) {
        $tagmasterid = 0;
        $res = $this->db->get_where('tagmaster', array('tagname' => $tagname));
        if ($res->num_rows() != 0) {
            $row = $res->row_array();
            $tagmasterid = $row['tagid'];
        }
        return $tagmasterid;
    }

    function getAllCat() {
        $res = $this->db->get('category');
        if ($res->num_rows() > 0) {
            return $res;
        }
    }

    function getAllRecQts() {
        $this->db->select('*');
        $this->db->from('question');
        $this->db->join('users', 'question.userid = users.user_id');
        $this->db->order_by("question.posteddate","desc");
        $this->db->limit(10,0);
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

    