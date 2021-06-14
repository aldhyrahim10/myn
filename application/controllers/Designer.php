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

        $this->load->model(array('designer_model','catalog_model'));
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

    public function detail(){

        $user = $this->session->userdata('nama');
        $id = $this->uri->segment(3);
        $data_profile = $this->db->get_where('designer', ['id_designer' => $id])->row_array();

        $data_catalog = $this->catalog_model->read_user($id);

        $designer = $this->designer_model->read_designer();

        $data = array(
            'judul' => 'MYN - Designer',
            'page' => 'client/designer/detail',
            'user' => $user,
            'designer' => $designer,
            'profile' => $data_profile,
            'catalog' => $data_catalog
        );

        $this->load->view('theme/client/index', $data);

    }
}