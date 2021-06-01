<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){

        parent:: __construct();

        if($this->session->userdata('nama') == 'admin'){

            $this->session->unset_userdata('nama');
            $this->session->unset_userdata('email');
        }
    }

    public function index(){

        $user = $this->session->userdata('nama');

        $data = array(
            'judul' => 'MYN - Home',
            'page' => 'client/home',
            'user' => $user
        );

        $this->load->view('theme/client/index', $data);
    }
}