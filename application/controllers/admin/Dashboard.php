<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct(){
        
        parent:: __construct();

        if (empty($this->session->userdata('nama'))) {
            redirect('admin/auth');
        }

        $this->load->model('dashboard_model');
        
    }

    public function index(){

        $user = $this->session->userdata('nama');

        $data_catalog = $this->dashboard_model->catalog();
        $data_designer = $this->dashboard_model->designer();
        $data_category = $this->dashboard_model->category();


        $data = array(
            'judul' => 'Dashboard',
            'page' => 'admin/dashboard',
            'catalog' => $data_catalog,
            'designer' => $data_designer,
            'category' => $data_category,
            'user' => $user
        );

        $this->load->view('theme/admin/index', $data);
    }
}

