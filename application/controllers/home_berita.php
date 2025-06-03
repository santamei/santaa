<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_berita extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('HomeBerita_model');
    }

    public function index()
    {
        $data['berita'] = $this->HomeBerita_model->get_all();
        $this->load->view('layout/header');
        $this->load->view('home/index', $data);
        $this->load->view('layout/footer');
    }

    public function detail($id)
    {
        $this->load->model('HomeBerita_model');
        $data['berita'] = $this->HomeBerita_model->get_by_id($id);

        if(!$data['berita']) {
            show_404();
        }

        $this->load->view('layout/header');
        $this->load->view('home/detail', $data);
        $this->load->view('layout/footer');
    }
}
