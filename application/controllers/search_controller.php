<?php

class Search_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('searchlib');
        $this->load->helper('url');
    }

    
    public function search() {
        $data['errmsg'] = '';
        $data['qtninfo'] =$this->searchlib->getAllRecentQts();
        $data['taginfo'] =$this->searchlib->getAllRecentQtnTag();
        $data['tagname'] =$this->searchlib->getAllTagName();
        $this->load->view('GuestView', $data);
    }
    public function SearchItem_json() {
        $qTitle = $this->input->post('qtnSearch');
        $qTag= $this->input->post('ansSearch');
        $sType= $this->input->post('typeSearch');
        $data['taginfo'] =$this->searchlib->getAllRecentQtnTag();
        $data['tagname'] =$this->searchlib->getAllTagName();
        
        $data['qtninfo'] =$this->searchlib->getSearch_json($qTitle,$qTag,$sType);
        
        $this->load->view('SearchResultView',$data);
    }
    
}
