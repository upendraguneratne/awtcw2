<?php

class Answer_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('answerlib');
        $this->load->helper('url');
    }

   
   
    public function PostAnswer() {
        $data['errmsg'] ='';
        $questionID = $this->input->get('qtid');
        $data['qtninfo'] =$this->answerlib->getQtsById($questionID);
        $data['taginfo'] =$this->answerlib->getAllRecentQtnTag();
        $data['tagname'] =$this->answerlib->getAllTagName();
        $data['ansinfo'] =$this->answerlib->getAnsById($questionID);
         $sessionarray = array(
                'qid' => $questionID
            );
        $this->session->set_userdata($sessionarray);
        $this->load->view('AnswerView', $data);
    }
    
    public function insert_answer() {
        $uid = $this->session->userdata('userid');
        $answer = $this->input->post('answer');
        if($uid != 0){
             if (!($errmsg = $this->answerlib->insertanswer($answer))) {
                    $data['errmsg'] = "Successfully posted answer ";
                    
                    $questionID = $this->session->userdata('qid');
                    $data['qtninfo'] =$this->answerlib->getQtsById($questionID);
                    $data['taginfo'] =$this->answerlib->getAllRecentQtnTag();
                    $data['tagname'] =$this->answerlib->getAllTagName();
                    $data['ansinfo'] =$this->answerlib->getAnsById($questionID);
               
                    $this->load->view('AnswerView', $data);
                } else {
                    $data['errmsg'] = $errmsg;
                    $this->load->view('AnswerView', $data);
                }
        }else{
         $data['errmsg'] = "Session has expired! Plase login to post an answer!";  
            $this->load->view('login_view', $data);
        }
       
    }
    
}