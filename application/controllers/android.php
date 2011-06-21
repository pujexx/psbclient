<?php

class Android extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        die();
    }

    function cari() {
        $this->load->model('identitas_model');
        $this->load->model('seleksi_model');
        $cari = $this->input->post('nouan',TRUE);
        $data = $this->identitas_model->android($cari);
        if ($data != FALSE) {
            $i = 1;
            $posisi_joss = 1;
            $posisi = $this->seleksi_model->get_terpilih();
            foreach ($posisi as $ps) {
             
                $ketemu = $ps['id_pendaftar'];
                if ($ketemu == $cari) {
                    $posisi_joss = $i;
                  
                }
                $i++;
            }
            $posisi_joss;

         
            echo "\nNama\t: " . $data['nama_pendaftar'] . "\n";
            echo "\nPosisi\t : " . $posisi_joss . "\n";
          
        } else {
            echo "\nMaaf data anda tidak ada di sistem Penerimaan Siswa Baru\n";
        }
    }

    function cari_ke2($id) {

    }

}
?>
