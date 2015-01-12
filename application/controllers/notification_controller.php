<?php

class Notification_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('notificationlib');
        $this->load->helper('url');
    }

   
    
    public function Notification() {
        $this->load->view('NotificationView');
    }

}