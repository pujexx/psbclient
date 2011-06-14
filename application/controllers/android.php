<?php

class Android extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

    }

    function cari() {
        $this->load->model('identitas_model');
        if ($this->identitas_model->android($this->input->post('nouan')) != FALSE) {
            $data = $this->identitas_model->android($this->input->post('nouan'));
            echo "\nNama : " . $data['nama_pendaftar'] . "\n";
            echo "\nNama : " . $data['nama_pendaftar'] . "\n";
        }
        else {
            echo "\nMaaf data anda tidak ada di sistem Penerimaan Siswa Baru\n";
        }
    }

}
?>
