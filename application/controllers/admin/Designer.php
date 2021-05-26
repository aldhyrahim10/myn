<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designer extends CI_Controller{

    public function __construct(){
        
        parent:: __construct();

        if (empty($this->session->userdata('nama'))) {
            redirect('admin/auth');
        }

        $this->load->model('designer_model');

    }

    public function index(){

        $user = $this->session->userdata('nama');

        $designer = $this->designer_model->read_user();
        

        $data = array(
            'judul' => 'Designer',
            'page' => 'admin/designer/index',
            'user' => $user,
            'designer' => $designer
        );

        $this->load->view('theme/admin/index', $data);
    }

    public function active(){

        $id = $this->uri->segment(4);

        $data = array(
            'status' => 1
        );

        $this->db->where('id', $id);
        $this->db->update('user', $data);

        $this->session->set_flashdata('message', 'Sukses, Akun Berhasil di verifikasi');

        redirect('admin/designer');
    }

    public function detail(){

        $user = $this->session->userdata('nama');

        $id = $this->uri->segment(4);

        $data_user = $this->designer_model->read_single($id);

        $data_designer = $this->db->get_where('designer', ['nama_designer' => $data_user['nama']])->row_array();

        $data = array(
            'judul' => 'Detail Designer',
            'page' => 'admin/designer/detail',
            'user' => $user,
            'designer' => $data_designer
        );

        $this->load->view('theme/admin/index', $data);
    }
}