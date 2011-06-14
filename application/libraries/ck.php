<?php

class Ck {

    var $edit = null;

    function __construct() {
        $this->edit = & get_instance();
        $this->edit->load->library('ckeditor');
        $this->edit->load->library('ckFinder');
    }

    function setck() {
        $this->edit->ckeditor->basePath = base_url() . 'asset/ckeditor/';
        $this->edit->ckeditor->config['toolbar'] = 'Full';
        $this->edit->ckeditor->config['language'] = 'en';
        $this->edit->ckfinder->SetupCKEditor($this->edit->ckeditor, 'asset/ckfinder');
    }

}

?>
