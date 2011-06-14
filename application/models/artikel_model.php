<?php

class Artikel_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all($limit, $uri) {
        $this->db->order_by('id', 'desc');
        $this->db->where('aktif', 1);
        $result = $this->db->get('artikel',$limit,$uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }

    function get_artikel_by_category($kategori) {
        $this->db->order_by('id', 'desc');
        $this->db->where('aktif', 1);
        $this->db->where('id_kategori',$kategori);
        $result = $this->db->get('artikel');
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }

    function get_all_admin($limit, $uri) {
        $this->db->order_by('id', 'desc');

        $result = $this->db->get('artikel',$limit,$uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }

    function get_one_admin($id) {
        $this->db->where('id', $id);
        $result = $this->db->get('artikel');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function get_one($link) {
        $this->db->where('link', $link);
        $this->db->where('aktif',1);
        $result = $this->db->get('artikel');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function insert($data) {
        $this->db->insert('artikel', $data);
    }

    function update($id,$data) {
        $this->db->where('id', $id);
        $this->db->update('artikel', $data);
    }

    function delete_one($id) {

        $this->db->where('id', $id);
        $this->db->delete('artikel');
    }

    function delete($id) {
        foreach ($id as $sip) {
            $this->db->where('id', $sip);
            $this->db->delete('artikel');
        }
    }

}
?>
