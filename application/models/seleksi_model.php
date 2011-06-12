<?php

class Seleksi_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_terpilih() {
        $this->db->select('*');

        $result = $this->db->get('identitas');
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }

    function get_nilai($id) {
        $this->db->select_sum('nilai');
        $this->db->where('id_pendaftar', $id);
        $result = $this->db->get('nilai');
        if ($result->num_rows() > 0) {
            return $result->row_array();
        } else {
            return array();
        }
    }

}

?>
