<?php

class Agama_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all($limit, $uri) {

        $result = $this->db->get('agama', $limit, $uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }

    function get_one($id) {
        $this->db->where('kode_agama', $id);
        $result = $this->db->get('agama');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function insert() {
           $data = array(
        
            'nama_agama' => $this->input->post('nama_agama', TRUE),
           
        );
        $this->db->insert('agama', $data);
    }

    function update($id) {
        $data = array(
         
       'nama_agama' => $this->input->post('nama_agama', TRUE),
       
        );
        $this->db->where('kode_agama', $id);
        $this->db->update('agama', $data);
    }

    function delete($id) {
        foreach ($id as $sip) {
            $this->db->where('kode_agama', $sip);
            $this->db->delete('agama');
        }
    }

}
?>
