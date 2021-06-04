<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller{

    public function __construct(){

        parent:: __construct();

        if($this->session->userdata('nama') == 'admin'){

            $this->session->unset_userdata('id');
            $this->session->unset_userdata('nama');
            $this->session->unset_userdata('email');
        }

        $this->load->model(array('catalog_model', 'category_model'));
    }

    public function index(){

        $user = $this->session->userdata('nama');

        $data_catalog = $this->catalog_model->read();

        $data_category = $this->category_model->read();

        $data = array(
            'judul' => 'MYN - Catalog',
            'page' => 'client/catalog/index',
            'user' => $user,
            'catalog' => $data_catalog,
            'category' => $data_category
        );

        $this->load->view('theme/client/index', $data);
    }

    public function detail(){

        $user = $this->session->userdata('nama');
        
        $id = $this->uri->segment(3);

        $review = $this->catalog_model->read_review($id);

        $catalog_detail = $this->catalog_model->read_single($id);

        $data = array(
            'judul' => 'MYN - Catalog Detail',
            'page' => 'client/catalog/detail',
            'user' => $user,
            'catalog' => $catalog_detail,
            'review' => $review
        );

        $this->load->view('theme/client/index', $data);

    }

    public function review(){

        $id_catalog = $this->input->post('id');
        $nama = $this->input->post('nama');
        $review = $this->input->post('review');

        $input = array(
            'id_catalog' => $id_catalog,
            'nama' => $nama,
            'review' => $review
        );

        $this->db->insert('feedback', $input);

        redirect('catalog/detail/'.$id_catalog);
    }

    public function result(){

        $kategori = $this->input->post('category');
        $nama = $this->input->post('name');

        if($kategori == '' && $nama ==''){

            $this->index();

        } elseif($kategori==''){

            $user = $this->session->userdata('nama');

            $data_catalog = $this->catalog_model->nama($nama);

            $data_category = $this->category_model->read();

            $data = array(
                'judul' => 'MYN - Hasil Pencarian Catalog',
                'page' => 'client/catalog/result',
                'user' => $user,
                'catalog' => $data_catalog,
                'category' => $data_category
            );

            $this->load->view('theme/client/index', $data);

        } elseif($nama ==''){

            $user = $this->session->userdata('nama');

            $data_catalog = $this->catalog_model->kategori($kategori);

            $data_category = $this->category_model->read();

            $data = array(
                'judul' => 'MYN - Hasil Pencarian Catalog',
                'page' => 'client/catalog/result',
                'user' => $user,
                'catalog' => $data_catalog,
                'category' => $data_category
            );

            $this->load->view('theme/client/index', $data);

        } else {

            $user = $this->session->userdata('nama');

            $data_catalog = $this->catalog_model->kate_nama($kategori, $nama);

            $data_category = $this->category_model->read();

            $data = array(
                'judul' => 'MYN - Hasil Pencarian Catalog',
                'page' => 'client/catalog/result',
                'user' => $user,
                'catalog' => $data_catalog,
                'category' => $data_category
            );

            $this->load->view('theme/client/index', $data);
        }

        
    }
}