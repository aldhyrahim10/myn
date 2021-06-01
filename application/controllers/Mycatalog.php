<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycatalog extends CI_Controller{

    public function __construct(){

        parent:: __construct();

        if($this->session->userdata('nama') == 'admin'){

            $this->session->unset_userdata('nama');
            $this->session->unset_userdata('email');
        }

        $this->load->model(array('category_model', 'catalog_model'));
    }

    public function index(){

        $user = $this->session->userdata('nama');

        $data = array(
            'judul' => 'MYN - My Catalog',
            'page' => 'client/mycatalog/index',
            'user' => $user
        );

        $this->load->view('theme/client/index', $data);
    }

    public function add(){

        $id_user = $this->session->userdata('id');
        $user = $this->session->userdata('nama');
        $data_category = $this->category_model->read();
        
        $data = array(
            'judul' => 'MYN - Tambah Catalog',
            'page' => 'client/mycatalog/add',
            'user' => $user,
            'category' => $data_category,
        );

        $this->load->view('theme/client/index', $data);
        
        
    }

    public function add_submit(){

        if($this->input->post('submit') == 'Simpan'){
            
            $this->form_validation->set_rules('name', 'Judul Catalog', 'required|trim');
            $this->form_validation->set_rules('description', 'Deskripsi Catalog', 'required|trim');
            $this->form_validation->set_rules('image-master', 'Gambar Master', 'required|trim');

            //setting library upload
            $config = array (
                'upload_path'    => './files/',
                'allowed_types'  => 'jpeg|jpg|png',
                'max_size'       => 10000
            );

            $id_user = $this->session->userdata('id');
            $user = $this->session->userdata('nama');
            $data_category = $this->category_model->read();

            $this->load->library('upload', $config);

            if($this->form_validation->run() == true ){

                $id_catalog = $this->input->post('id');
                $kategori = $this->input->post('category');
                $judul = $this->input->post('name');
                $description = $this->input->post('description');

                if (!$this->upload->do_upload('image')){

                    $response = $this->upload->display_errors();

                    $data = array(
                        'judul' => 'MYN - Tambah Catalog',
                        'page' => 'client/mycatalog/add',
                        'user' => $user,
                        'category' => $data_category,
                        'response' => $response
                    );

                    $this->load->view('theme/client/index', $data);
                } else {

                    $this->upload->do_upload('image-master');
                    $upload_data = $this->upload->data('file_name');

                    $input = array(
                        'id_catalog' => $id_catalog,
                        'nama_catalog' => $judul,
                        'deskripsi_catalong' => $description,
                        'id_designer' => $id_user,
                        'id_category' => $kategori,
                        'image_master' => $upload_data
                    );

                    $this->catalog_model->insert($input);

                    redirect('mycatalog');
                }
            }
        }
    }

    public function edit(){

        $user = $this->session->userdata('nama');

        $data = array(
            'judul' => 'MYN - Edit Catalog',
            'page' => 'client/mycatalog/edit',
            'user' => $user
        );

        $this->load->view('theme/client/index', $data);
    }
}