<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index(){

        $data = array(
            'judul' => 'MYN - Home',
            'page' => 'client/home'
        );

        $this->load->view('theme/client/index', $data);
    }
}