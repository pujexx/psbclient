<?php

class Identitas_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all($limit, $uri) {

        $result = $this->db->get('identitas', $limit, $uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }

    function get_one($id) {
        $this->db->where('id_pendaftar', $id);
        $result = $this->db->get('identitas');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function android($id) {
        $this->db->where('id_pendaftar', $id);
        $result = $this->db->get('identitas');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return FALSE;
        }
    }

    function insert($data) {

        $this->db->insert('identitas', $data);
    }

    function update($id) {

        $this->db->where('id_pendaftar', $id);
        $this->db->update('identitas', $data);
    }

    function delete($id) {
        foreach ($id as $sip) {
            $this->db->where('id_pendaftar', $sip);
            $this->db->delete('identitas');
        }
    }

    function cek_indentitas($id) {
        $this->db->select('id_pendaftar');
        $this->db->where('id_pendaftar', $id);
        $result = $this->db->get('identitas');
        if ($result->num_rows() == 1) {

            return TRUE;
        } else {
            return FALSE;
        }
    }

}
?>
