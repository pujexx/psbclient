<?php

class Front extends CI_Controller {

    var $ajax = 0;

    function __construct() {
        parent::__construct();
        $this->load->model('identitas_model');
        $this->load->model('mata_pelajaran_model');
        
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
               $this->session->unset_userdata('nouan');
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
        if ($_POST['ajax_kirim'] == 1) {
            if ($this->form_validation->run() == False) {
                $this->ajax = 1;
                $this->pendaftaran();
            } else {
                if ($this->identitas_model->cek_indentitas($this->input->post('nouan', TRUE)) == TRUE) {
                    echo "NOMOR UAN anda sudah ada di database kami";
                } else {
                    $data = array(
                        'id_pendaftar' => $this->input->post('nouan', TRUE),
                        'nama_pendaftar' => $this->input->post('nama', TRUE),
                        'tempat_lahir' => $this->input->post('tempat_lahir', TRUE),
                        'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
                        'agama' => $this->input->post('agama', TRUE),
                        'alamat_pendaftar' => $this->input->post('alamat', TRUE),
                        'telp_pendaftar' => $this->input->post('notelp', TRUE),
                        'nama_sekolah_asal' => $this->input->post('sekolahasal', TRUE),
                        'alamat_sekolah_asal' => $this->input->post('alamatsekolah', TRUE),
                        'tahun_lulus' => $this->input->post('tahunlulus', TRUE),
                        'nomor_stl' => $this->input->post('nostl', TRUE),
                        'nama_wali' => $this->input->post('namawali', TRUE),
                        'alamat_wali' => $this->input->post('alamatwali', TRUE),
                        'telp_wali' => $this->input->post('notelpwali', TRUE),
                        'pekerjaan_wali' => $this->input->post('pekerjaanwali', TRUE),
                    );
                    $this->identitas_model->insert($data);
                    $this->session->set_userdata(array('nouan' => $data['id_pendaftar']));
                    $this->ajax = 1;
                    $this->input_nilai();
                }
            }
        } else {
            if ($this->form_validation->run() == False) {
                $this->ajax = 0;
                $this->pendaftaran();
            } else {
                $data = array(
                    'id_pendaftar' => $this->input->post('nouan', TRUE),
                    'nama_pendaftar' => $this->input->post('nama', TRUE),
                    'tempat_lahir' => $this->input->post('tempat_lahir', TRUE),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
                    'agama' => $this->input->post('agama', TRUE),
                    'alamat_pendaftar' => $this->input->post('alamat', TRUE),
                    'telp_pendaftar' => $this->input->post('notelp', TRUE),
                    'nama_sekolah_asal' => $this->input->post('sekolahasal', TRUE),
                    'alamat_sekolah_asal' => $this->input->post('alamatsekolah', TRUE),
                    'tahun_lulus' => $this->input->post('tahunlulus', TRUE),
                    'nomor_stl' => $this->input->post('nostl', TRUE),
                    'nama_wali' => $this->input->post('namawali', TRUE),
                    'alamat_wali' => $this->input->post('alamatwali', TRUE),
                    'telp_wali' => $this->input->post('notelpwali', TRUE),
                    'pekerjaan_wali' => $this->input->post('pekerjaanwali', TRUE),
                );
                $this->identitas_model->insert($data);
                redirect('');
            }
        }
    }

    function input_nilai() {


        if ($this->session->userdata('nouan') != "") {
            if ($this->ajax == 1) {
                $data['matapelajaran'] = $this->mata_pelajaran_model->tampil_pelajaran();
                $this->load->view('frontend/input_nilai', $data);
            } else {
                $data['matapelajaran'] = $this->mata_pelajaran_model->tampil_pelajaran();
                $data['content'] = "frontend/input_nilai";
                $this->load->view('frontend/template');
            }
        } else {
            die();
        }
    }

    function submit_nilai() {
        $mapel = $this->mata_pelajaran_model->tampil_pelajaran();
      
        foreach ($mapel as $mpl) {
            $this->form_validation->set_rules("nilai_".$mpl['kode_mata_pelajaran'], $mpl['nama_mata_pelajaran'], 'required|numeric');
        }    
          if ($this->form_validation->run() == False) {
                $this->ajax = 1;
                $this->input_nilai();
            } else {
               foreach ($mapel as $mpl) {
                   $data['id_pendaftar']=$this->session->userdata('nouan');
                   $data['kode_mata_pelajaran']=$mpl['kode_mata_pelajaran'];
                   $data['nilai']=$this->input->post("nilai_".$mpl['kode_mata_pelajaran']);
                   $this->mata_pelajaran_model->insert_nilai($data);
               }
               $this->session->unset_userdata('nouan');
               echo "success";
            }

    }

}

?>
