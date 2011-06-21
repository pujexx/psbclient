<?php

class Seleksi_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_terpilih() {
        $result=  $this->db->query("SELECT n.id_pendaftar , i.nama_pendaftar, sum( n.nilai ) AS total
FROM nilai n, identitas i
WHERE n.id_pendaftar = i.id_pendaftar
GROUP BY n.id_pendaftar
ORDER BY total DESC");
        
      
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
     function get_terpilih_posisi($id) {
        $result=  $this->db->query("SELECT n.id_pendaftar, i.nama_pendaftar, sum( n.nilai ) AS total
FROM nilai n, identitas i
WHERE n.id_pendaftar = i.id_pendaftar and n.identitas = $id
GROUP BY n.id_pendaftar
ORDER BY total DESC");


        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }

}

?>
