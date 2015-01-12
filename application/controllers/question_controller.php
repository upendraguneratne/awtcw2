<?php

class Question_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('questionlib');
        $this->load->helper('url');
    }

     public function HomePage() {
        $data['errmsg'] ='';
        $data['qtninfo'] =$this->questionlib->getAllRecentQts();
        $data['taginfo'] =$this->questionlib->getAllRecentQtnTag();
        $data['tagname'] =$this->questionlib->getAllTagName();
        $this->load->view('home_view', $data);
    }
   
    public function AskQuestion() {
        $data['errmsg'] ='';
        $data['catinfo'] = $this->questionlib->getAllCategory();
        $this->load->view('AskQuestionView', $data);
    }
    
    public function insert_question() {
        $title = $this->input->post('title');
        $description = $this->input->post('Des');
        $category = $this->input->post('Category');
        $tag = $this->input->post('tag');
       


        if (!($errmsg = $this->questionlib->insertQtn($title, $description, $category, $tag))) {
            $data['errmsg'] = "Successfully posted question ";
            $this->HomePage();
        } else {
            $data['errmsg'] = $errmsg;
            $this->load->view('AskQuestionView', $data);
        }
    }
    
}