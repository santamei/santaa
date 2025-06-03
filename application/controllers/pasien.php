<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pasien_model');
        $this->load->model('Dokter_model'); // jika perlu dropdown dokter
    }

    public function index() {
        $data['pasien'] = $this->Pasien_model->get_all_pasien();
        $this->load->view('templates/header');
        $this->load->view('pasien/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $data['dokter'] = $this->Dokter_model->get_all_dokter();
        $this->load->view('templates/header');
        $this->load->view('pasien/form_pasien', $data);
        $this->load->view('templates/footer');
    }

    public function insert() {
        $data = array(
            'nama'              => $this->input->post('nama'),
            'tanggal_lahir'     => $this->input->post('tanggal_lahir'),
            'alamat'            => $this->input->post('alamat'),
            'no_telepon'        => $this->input->post('no_telepon'),
            'email'             => $this->input->post('email'),
            'id_dokter'         => $this->input->post('id_dokter'),
            'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan'),
            'jam_kunjungan'     => $this->input->post('jam_kunjungan'),
            'keluhan'           => $this->input->post('keluhan'),
            'status'            => 'dalam proses'
        );

        if ($this->Pasien_model->insert_pasien($data)) {
            $this->session->set_flashdata('success', 'Pendaftaran pasien berhasil');
        } else {
            $this->session->set_flashdata('error', 'Gagal mendaftarkan pasien');
        }
        redirect('pasien');
    }

    public function edit($id) {
        $data['pasien'] = $this->Pasien_model->get_pasien_by_id($id);
        $data['dokter'] = $this->Dokter_model->get_all_dokter();
        $this->load->view('templates/header');
        $this->load->view('pasien/edit_pasien', $data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        $data = array(
            'nama'              => $this->input->post('nama'),
            'tanggal_lahir'     => $this->input->post('tanggal_lahir'),
            'alamat'            => $this->input->post('alamat'),
            'no_telepon'        => $this->input->post('no_telepon'),
            'email'             => $this->input->post('email'),
            'id_dokter'         => $this->input->post('id_dokter'),
            'tanggal_kunjungan' => $this->input->post('tanggal_kunjungan'),
            'jam_kunjungan'     => $this->input->post('jam_kunjungan'),
            'keluhan'           => $this->input->post('keluhan'),
            'status'            => $this->input->post('status')
        );

        if ($this->Pasien_model->update_pasien($id, $data)) {
            $this->session->set_flashdata('success', 'Data pasien berhasil diperbarui');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui data pasien');
        }
        redirect('pasien');
    }

    public function hapus($id) {
        if ($this->Pasien_model->delete_pasien($id)) {
            $this->session->set_flashdata('success', 'Data pasien berhasil dihapus');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus data pasien');
        }
        redirect('pasien');
    }
}