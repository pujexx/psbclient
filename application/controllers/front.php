<?php

class Front extends CI_Controller {

    var $ajax = 0;

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('frontend/template');
        if ($this->uri->segment(3) != "") {
            switch ($this->uri->segment(3)) {
                case "" :
                    break;
                default :
                    break;
            }
        } else {
            
        }
    }

    function page() {
        // print_r($_POST);
        if ($this->input->post('ajax') != 1) {
            echo "ajax tidak aktif";
        } else {
            $this->ajax = 1;
            $this->pendaftaran();
        }
    }

    function home() {
        
    }

    function pendaftaran() {
        if ($this->ajax == 1) {

            $this->ajax = 1;

            $this->load->view('frontend/form_pendaftaran');
        } else {
            $data['content'] = "frontend/form_pendaftaran";
            $this->load->view('frontend/template', $data);
        }
        //  echo $_POST;
        //$this->load->view('frontend/form_pendaftaran');
    }

    function submitpendaftaran() {
        $config = array(
            array(
                'field' => 'nouan',
                'label' => 'No UAN',
                'rules' => 'required'
            ),
            array(
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ),
            array(
                'field' => 'tempat_lahir',
                'label' => 'Tempat lahir',
                'rules' => 'required'
            ),
            array(
                'field' => 'tanggal_lahir',
                'label' => 'Tanggal lahir',
                'rules' => 'required'
            ),
            array(
                'field' => 'agama',
                'label' => 'Agama',
                'rules' => 'required'
            ),
            array(
                'field' => 'alamat',
                'label' => 'alamat',
                'rules' => 'required'
            ),
            array(
                'field' => 'sekolahasal',
                'label' => 'Sekolah Asal',
                'rules' => 'required'
            ),
            array(
                'field' => 'tahunlulus',
                'label' => 'Tahun lulus',
                'rules' => 'required'
            ),
            array(
                'field' => 'namawali',
                'label' => 'Nama Wali',
                'rules' => 'required'
            ),
            array(
                'field' => 'alamatwali',
                'label' => 'Alamat',
                'rules' => 'required'
            ),
        );
        $this->form_validation->set_rules($config);
        if($_POST['ajax_kirim']==1){
            if($this->form_validation->run()==False){
              $this->ajax=1;
              $this->pendaftaran();
            }
            else {
             echo "berhasil";   
            }
        }
        else {
            
        }
    }

}

?>
