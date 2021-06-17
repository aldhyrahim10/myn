<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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

        $this->load->model('dashboard_model');
        
    }

    public function index(){

        $user = $this->session->userdata('nama');

        $data_catalog = $this->dashboard_model->catalog();
        $data_designer_verified = $this->dashboard_model->designer_verified();
        $data_category = $this->dashboard_model->category();
        $data_designer_unverified = $this->dashboard_model->designer_unverified();


        $data = array(
            'judul' => 'Dashboard',
            'page' => 'admin/dashboard',
            'catalog' => $data_catalog,
            'designer_verified' => $data_designer_verified,
            'designer_unverified' => $data_designer_unverified,
            'category' => $data_category,
            'user' => $user
        );

        $this->load->view('theme/admin/index', $data);
    }
}

