<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller{

    public function index(){

        $user = $this->session->userdata('nama');

        $data = array(
            'judul' => 'MYN - Catalog',
            'page' => 'client/catalog/index',
            'user' => $user
        );

        $this->load->view('theme/client/index', $data);
    }

    public function detail(){

        $user = $this->session->userdata('nama');

        $data = array(
            'judul' => 'MYN - Catalog Detail',
            'page' => 'client/catalog/detail',
            'user' => $user
        );

        $this->load->view('theme/client/index', $data);

    }
}