<?php

class Page extends CI_Controller {

    var $ajax=0;

    function __construct() {
        parent::__construct();
        $this->load->model('page_model');
    }

    function index() {
        $config = array(
            'base_url' => site_url() . '/admin/page/index/',
            'total_rows' => $this->db->count_all('page'),
            'per_page' => 10,
            'uri_segment' => 4
        );
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['content'] = "page";
        $data['pages'] = $this->page_model->get_all_admin($config['per_page'], $this->uri->segment(4));
        $this->load->view('backend/template', $data);
    }

    function newpage() {
        if ($this->ajax == 1) {
            $this->load->view('backend/newpage');
        } else {


            $data['content'] = "newpage";

            $this->load->view('backend/template', $data);
        }
    }

    function submitpage() {
        if ($_POST) {
            $config = array(
                array(
                    'field' => 'name',
                    'label' => 'Nama',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'title',
                    'label' => 'Judul',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'content',
                    'label' => 'Content',
                    'rules' => 'required'
                )
            );
            $this->form_validation->set_rules($config);
            if ($this->input->post('ajax') == 1) {
                if ($this->form_validation->run() == TRUE) {
                    $data = array(
                        'name' => $this->input->post('name', TRUE),
                        'title' => $this->input->post('title', TRUE),
                        'content' => $this->input->post('content'),
                        'aktif' => $this->input->post('status'),
                        'link' => str_replace(" ", "-", $this->input->post('title', TRUE))
                    );


                    $this->page_model->insert($data);
                    echo "success";
                } else {
                    $this->ajax = 1;
                    $this->newpage();
                }
            }
        } else {
            die();
        }
    }

    function formupdate($id) {
        if (isset($id)) {
            if ($this->ajax == 1) {
                $data['page'] = $this->page_model->get_one_admin($id);
                $this->load->view('backend/form_page', $data);
            } else {
                $data['content'] = "form_page";
                $data['page'] = $this->page_model->get_one_admin($id);
                $this->load->view('backend/template', $data);
            }
        }
    }

    function submitupdate() {
        if ($_POST) {
            $config = array(
                array(
                    'field' => 'name',
                    'label' => 'Nama',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'title',
                    'label' => 'Judul',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'content',
                    'label' => 'Content',
                    'rules' => 'required'
                )
            );
            $this->form_validation->set_rules($config);
            if ($this->input->post('ajax') == 1) {
                if ($this->form_validation->run() == TRUE) {
                    $data = array(
                        'name' => $this->input->post('name', TRUE),
                        'title' => $this->input->post('title', TRUE),
                        'content' => $this->input->post('content'),
                        'aktif' => $this->input->post('status'),
                        'link' => str_replace(" ", "-", $this->input->post('title', TRUE))
                    );
                    $id = $this->input->post('id');

                    $this->page_model->update($id, $data);
                    echo "success";
                } else {
                    $id = $this->input->post('id');
                    $this->ajax = 1;
                    $this->formupdate($id);
                }
            }
        } else {
            die();
        }
    }

    function deleteone() {
        if ($_POST) {
            $this->page_model->delete_one($this->input->post('id'));
        }
    }

}
?>
