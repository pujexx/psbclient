<?php

class Mata_pelajaran_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all($limit, $uri) {

        $result = $this->db->get('mata_pelajaran', $limit, $uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }

    function tampil_pelajaran() {
        $this->db->order_by('kode_mata_pelajaran', 'asc');
        $result = $this->db->get('mata_pelajaran');
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }

    function get_one($id) {
        $this->db->where('kode_mata_pelajaran', $id);
        $result = $this->db->get('mata_pelajaran');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function insert() {
        $data = array(
            'nama_mata_pelajaran' => $this->input->post('nama_mata_pelajaran', TRUE),
        );
        $this->db->insert('mata_pelajaran', $data);
    }

    function update($id) {
        $data = array(
            'nama_mata_pelajaran' => $this->input->post('nama_mata_pelajaran', TRUE),
        );
        $this->db->where('kode_mata_pelajaran', $id);
        $this->db->update('mata_pelajaran', $data);
    }

    function delete($id) {
        foreach ($id as $sip) {
            $this->db->where('kode_mata_pelajaran', $sip);
            $this->db->delete('mata_pelajaran');
        }
    }

    function insert_nilai($data) {
        $this->db->insert('nilai', $data);
    }

}

?>
