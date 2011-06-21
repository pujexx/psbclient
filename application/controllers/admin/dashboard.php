<?php

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['content'] = "dashboard";
        $this->load->view('backend/template',$data);
    }

}
?>
