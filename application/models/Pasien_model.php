<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model {

    public function get_all_pasien() {
        $this->db->select('pasien.*, dokter.nama_dokter');
        $this->db->from('pasien');
        $this->db->join('dokter', 'pasien.id_dokter = dokter.id_dokter', 'left');
        return $this->db->get()->result_array();
    }

    public function insert_pasien($data) {
        return $this->db->insert('pasien', $data);
    }

    public function get_pasien_by_id($id) {
        $this->db->select('pasien.*, dokter.nama_dokter');
        $this->db->from('pasien');
        $this->db->join('dokter', 'pasien.id_dokter = dokter.id_dokter', 'left');
        $this->db->where('pasien.id', $id);
        return $this->db->get()->row_array();
    }

    public function update_pasien($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('pasien', $data);
    }

    public function delete_pasien($id) {
        $this->db->where('id', $id);
        return $this->db->delete('pasien');
    }
}