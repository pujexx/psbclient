<?php

class Page extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('page_model');
    }

    function index() {
        die();
    }
    function select($link){
        if(isset ($link)){
            $data['page']=$this->page_model->get_one($link);
            $data['content']="frontend/page";
            $this->load->view('frontend/template',$data);
        }
        else {
            die();
        }
    }
   

}
?>
