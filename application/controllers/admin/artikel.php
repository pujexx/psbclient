<?php
class Artikel extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('artikel_model');
    }

    function index() {

    }

}
?>
