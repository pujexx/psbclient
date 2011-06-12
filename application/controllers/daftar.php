<?php

class Daftar extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('seleksi_model');
    }

    function index() {
        
        $data['content']="frontend/daftar";
        $data['daftar']=$this->seleksi_model->get_terpilih();
        $this->load->view('frontend/template',$data);
    }
    function refresh(){
       
        $data['daftar']=$this->seleksi_model->get_terpilih();
        $this->load->view('frontend/daftar',$data);
    }

}
?>
