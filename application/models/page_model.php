<?php

class page_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all() {
        $this->db->order_by('id', 'asc');
        $this->db->where('aktif', 1);
        $result = $this->db->get('page');
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }

    function get_all_admin() {
        $this->db->order_by('id', 'desc');

        $result = $this->db->get('page');
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }

    function get_one_admin($id) {
        $this->db->where('id', $id);
        $result = $this->db->get('page');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function get_one($link) {
        $this->db->where('link', $link);
        $result = $this->db->get('page');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function insert($data) {
        $this->db->insert('page', $data);
    }

    function update($id) {
        $this->db->where('id', $id);
        $this->db->update('page', $data);
    }

    function delete_one($id) {

        $this->db->where('id', $sip);
        $this->db->delete('page');
    }

    function delete($id) {
        foreach ($id as $sip) {
            $this->db->where('id', $sip);
            $this->db->delete('page');
        }
    }

}
?>
