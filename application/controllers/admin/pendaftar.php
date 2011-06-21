<?php

class Pendaftar extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->model("identitas_model");
        $config = array(
            'base_url' => site_url() . '/admin/pedaftar/index/',
            'total_rows' => $this->db->count_all('identitas'),
            'per_page' => 5,
            'uri_segment' => 4
        );

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['pendaftars'] = $this->identitas_model->get_all($config['per_page'], $this->uri->segment(4));
        $data['content'] = "pendaftar";
        $this->load->view('backend/template', $data);
    }

}
?>
