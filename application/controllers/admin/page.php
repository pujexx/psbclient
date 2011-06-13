<?php

class Page extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('page_model');
    }

    function index() {
        $data['content'] = "page";
        $data['pages']= $this->page_model->get_all_admin();
        $this->load->view('backend/template',$data);
    }
    function newpage(){
        
    }
    function submitpage(){
        
    }
    function formupdate($id){
        
    }
    function submitupdate(){
        
    }
    function delete(){
        
    }

}
?>
