<?php

class Artikel extends CI_Controller {

    var $ajax;

    function __construct() {
        parent::__construct();
        $this->load->model('artikel_model');
    }

    function index() {
        $config = array(
            'base_url' => site_url() . '/admin/artikel/index/',
            'total_rows' => $this->db->count_all('artikel'),
            'per_page' => 10,
            'uri_segment' => 4
        );
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['artikels'] = $this->artikel_model->get_all_admin($config['per_page'], $this->uri->segment(4));
        $data['content'] = "artikel";
        $this->load->view('backend/template', $data);
    }

    function newartikel() {
        if ($this->ajax == 1) {
            $this->load->model('kategori_model');
            $data['kategories'] = $this->kategori_model->get_all();

            $this->load->view('newartikel', $data);
        } else {
            $this->load->library('ck');

            $this->ck->setck();
            $this->load->model('kategori_model');
            $data['kategories'] = $this->kategori_model->get_all();
            $data['content'] = "newartikel";
            $this->load->view('backend/template', $data);
        }
    }

    function submitartikel() {
        if (isset($_POST)) {
            $config = array(
                array(
                    'field' => 'judul',
                    'label' => 'Judul',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'artikel',
                    'label' => 'kategori',
                    'rules' => 'required'
                ),
            );
            $this->form_validation->set_rules($config);
            if ($this->input->post('ajax') == 1) {
                if ($this->form_validation->run() == TRUE) {
                    $data = array(
                        'title' => $this->input->post('judul', TRUE),
                        'content' => $this->input->post('artikel'),
                        'tanggal' => date('Ymd'),
                        'id_user' => $this->session->userdata('id'),
                        'aktif' => $this->input->post('status')
                    );
                    $kategori = $this->input->post('kategori');
                    if (!empty($kategori)) {
                        $data['id_kategori'] = $this->input->post('kategori', TRUE);
                    }
                    $this->load->model('artikel_model');
                    $this->artikel_model->insert($data);
                    echo "success";
                } else {
                    $this->ajax = 1;
                    $this->newartikel();
                }
            }
        } else {
            die();
        }
    }

    function formupdate($id) {
        if ($this->ajax == 1) {
            if (isset($id)) {
                $data['artikel'] = $this->artikel_model->get_one_admin($id);
                $this->load->view('form_artikel', $data);
            }
        } else {
            if (isset($id)) {
                $data['content'] = "form_artikel";
                $data['artikel'] = $this->artikel_model->get_one_admin($id);
                $this->load->view('backend/template', $data);
            } else {
                die();
            }
        }
    }

    function submitupdate() {
        if (isset($_POST)) {
            $config = array(
                array(
                    'field' => 'judul',
                    'label' => 'Judul',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'artikel',
                    'label' => 'Artikel',
                    'rules' => 'required'
                ),
            );
            $this->form_validation->set_rules($config);
            if ($this->input->post('ajax') == 1) {
                if ($this->form_validation->run() == TRUE) {
                    $data = array(
                        'title' => $this->input->post('judul', TRUE),
                        'content' => $this->input->post('artikel'),
                        'tanggal' => date('Ymd'),
                        'id_user' => $this->session->userdata('id'),
                        'aktif' => $this->input->post('status')
                    );
                    $kategori = $this->input->post('kategori');
                    if (!empty($kategori)) {
                        $data['id_kategori'] = $this->input->post('kategori', TRUE);
                    }
                    //  print_r($_POST);
                    $id = $this->input->post('id');
                    $this->load->model('artikel_model');
                    $this->artikel_model->update($id, $data);
                    echo "success";
                } else {
                    $id = $this->input->post('id');
                    $this->formupdate($id);
                }
            }
        } else {
            die();
        }
    }

    function delete() {
        
    }

    function deleteone() {
        if (isset($_POST)) {
            //  print_r($_POST);
            $this->artikel_model->delete_one($this->input->post('id'));
        }
    }

}
?>
