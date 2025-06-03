<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter_model extends CI_Model {

    public function get_all_dokter() {
        return $this->db->get('dokter')->result_array();
    }

    public function get_dokter_by_id($id) {
        $this->db->where('id_dokter', $id);
        return $this->db->get('dokter')->row_array();
    }
}