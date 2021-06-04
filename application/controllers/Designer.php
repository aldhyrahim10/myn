<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designer extends CI_Controller {

    public function __construct(){

        parent:: __construct();

        if($this->session->userdata('nama') == 'admin'){

            $this->session->unset_userdata('id');
            $this->session->unset_userdata('nama');
            $this->session->unset_userdata('email');
        }

        $this->load->model('designer_model');
    }

    public function index(){

        $user = $this->session->userdata('nama');

        $designer = $this->designer_model->read_designer();

        $data = array(
            'judul' => 'MYN - Designer',
            'page' => 'client/designer/index',
            'user' => $user,
            'designer' => $designer
        );

        $this->load->view('theme/client/index', $data);
    }
}