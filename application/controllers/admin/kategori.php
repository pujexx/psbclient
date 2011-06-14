<?php

class Kategori extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('kategori_model');
    }

    function index() {
        $data['kategories'] = $this->kategori_model->get_all();
        $data['content'] = "kategori";
        $this->load->view('backend/template', $data);
    }

    function submitkategori() {
        if (isset($_POST)) {
            $data = array('kategori' => $this->input->post('kategori'));
            $this->kategori_model->insert($data);
            redirect('admin/kategori/showkategori');
        }
    }

    function showkategori() {
        $data['kategories'] = $this->kategori_model->get_all();

        $this->load->view('backend/show_kategori', $data);
    }

    function submitupdate() {
        if (isset($_POST)) {
            $this->kategori_model->update($this->input->post('id'), array('kategori' => $this->input->post('kategori')));
            redirect('admin/kategori/showkategori');
        }
    }

    function deleteone() {
        if (isset($_POST)) {
            $this->kategori_model->delete($this->input->post('id'));
        }
    }

}
?>
