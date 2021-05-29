<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycatalog extends CI_Controller{

    public function index(){

        $user = $this->session->userdata('nama');

        $data = array(
            'judul' => 'MYN - My Catalog',
            'page' => 'client/mycatalog/index',
            'user' => $user
        );

        $this->load->view('theme/client/index', $data);
    }

    public function add(){

        $user = $this->session->userdata('nama');

        $data = array(
            'judul' => 'MYN - Tambah Catalog',
            'page' => 'client/mycatalog/add',
            'user' => $user
        );

        $this->load->view('theme/client/index', $data);
    }

    public function edit(){

        $user = $this->session->userdata('nama');

        $data = array(
            'judul' => 'MYN - Edit Catalog',
            'page' => 'client/mycatalog/edit',
            'user' => $user
        );

        $this->load->view('theme/client/index', $data);
    }
}