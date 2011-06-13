<?php

class Kategori_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all() {
        $this->db->order_by('id_kategori','desc');
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

    function insert() {
           $data = array(
        
            'kategori' => $this->input->post('kategori', TRUE),
           
        );
        $this->db->insert('kategori', $data);
    }

    function update($id) {
        $data = array(
         
       'kategori' => $this->input->post('kategori', TRUE),
       
        );
        $this->db->where('id_kategori', $id);
        $this->db->update('kategori', $data);
    }

    function delete($id) {
        foreach ($id as $sip) {
            $this->db->where('id_kategori', $sip);
            $this->db->delete('kategori');
        }
    }

}
?>
