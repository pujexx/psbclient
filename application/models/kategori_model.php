<?php

class Kategori_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all() {
        $this->db->order_by('id_kategori', 'desc');
        $result = $this->db->get('kategori');
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }

    function get_one($id) {
        $this->db->where('id_kategori', $id);
        $result = $this->db->get('kategori');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function insert($data) {

        $this->db->insert('kategori', $data);
    }

    function update($id, $data) {

        $this->db->where('id_kategori', $id);
        $this->db->update('kategori', $data);
    }

    function delete($id) {

        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori');
    }

}
?>
