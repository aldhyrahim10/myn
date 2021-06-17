<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller{

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

        $this->load->model('category_model');
    }

    public function index(){

        $user = $this->session->userdata('nama');

        $category = $this->category_model->read();

        $data = array(
            'judul' => 'category',
            'page' => 'admin/category/index',
            'user' => $user,
            'category' => $category
        );

        $this->load->view('theme/admin/index', $data);
    }

    public function add(){
        $user = $this->session->userdata('nama');

        $this->form_validation->set_rules('category', 'Category', 'required|trim');

        if($this->form_validation->run() == false){
            $data = array(
                'judul' => 'Tambah Data',
                'page' => 'admin/category/add',
                'user' => $user
            );
            
            
            $this->load->view('theme/admin/index', $data);

        } else {

            $category = $this->input->post('category');

            $input = array(
                'nama_category' => $category
            );

            $this->category_model->insert($input);

            $this->session->set_flashdata('message', 'Sukses, Data berhasil ditambahkan');
            
            redirect('admin/category');

        }
        
    }

    public function edit(){

        $user = $this->session->userdata('nama');

        $id = $this->uri->segment(4);
        
        $category_single = $this->category_model->read_single($id);

        $this->form_validation->set_rules('category', 'Category', 'required|trim');

        if($this->form_validation->run() == false){

            $data = array(
                'judul' => 'Edit Data',
                'page' => 'admin/category/edit',
                'user' => $user,
                'category' => $category_single
            );

            $this->load->view('theme/admin/index', $data);

        } else {

            $id = $this->uri->segment(4);

            $data_category = $this->input->post('category');

            $input = array(
                'nama_category' => $data_category
            );

            $this->category_model->update($input, $id);

            $this->session->set_flashdata('message', 'Sukses, Data berhasil diubah');
            
            redirect('admin/category');

        }

    }

    public function delete(){

        $id = $this->uri->segment(4);

        $this->category_model->delete($id);

        $this->session->set_flashdata('message', 'Sukses, Data Berhasil Dihapus');

        redirect('admin/category');
    }
}