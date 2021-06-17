<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller{

    public function __construct(){
        
        parent:: __construct();

        if (empty($this->session->userdata('nama'))) {
            redirect('admin/auth');
        }

        if($this->session->userdata('nama') != 'admin'){

            $this->session->unset_userdata('id');
            $this->session->unset_userdata('nama');
            $this->session->unset_userdata('email');
        }

        $this->load->model('catalog_model');
    }

    public function index(){

        $user = $this->session->userdata('nama');

        $catalog = $this->catalog_model->read();

        $data = array(
            'judul' => 'Catalog',
            'page' => 'admin/catalog/index',
            'user' => $user,
            'catalog' => $catalog
        );

        $this->load->view('theme/admin/index', $data);
    }

    public function detail(){

        $user = $this->session->userdata('nama');

        $id = $this->uri->segment(4);

        $catalog_single = $this->catalog_model->read_single($id);

        $data = array(
            'judul' => 'Catalog | Detail',
            'page' => 'admin/catalog/detail',
            'user' => $user,
            'catalog' => $catalog_single
        );

        $this->load->view('theme/admin/index', $data);

    }

}