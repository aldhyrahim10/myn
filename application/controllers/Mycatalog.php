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
        $id = $this->session->userdata('id');

        $data_catalog = $this->catalog_model->read_user($id);

        $data = array(
            'judul' => 'MYN - My Catalog',
            'page' => 'client/mycatalog/index',
            'user' => $user,
            'id' => $id,
            'catalog' => $data_catalog
        );

        $this->load->view('theme/client/index', $data);
    }

    public function add(){

		$this->add_submit();
        $id_user       = $this->session->userdata('id');
        $user          = $this->session->userdata('nama');
        $data_category = $this->category_model->read();
        
        $data = array(
            'judul' => 'MYN - Tambah Catalog',
            'page' => 'client/mycatalog/add',
            'id_user'=> $id_user,
            'user' => $user,
            'category' => $data_category,
        );

        $this->load->view('theme/client/index', $data);
    }

    public function add_submit()
    {
        if ($this->input->post('submit') == 'Simpan') {

            //aturan validasi input login
            $this->form_validation->set_rules('category', 'Category', 'required');
            $this->form_validation->set_rules('id', 'id', 'required');
            $this->form_validation->set_rules('name', 'Judul Catalog', 'required|is_unique[catalog.nama_catalog]');
            $this->form_validation->set_rules('description', 'Deskripsi Catalog', 'required');

            //setting library upload
            $config = array (
                'upload_path'    => './files/',
                'allowed_types'  => 'jpeg|jpg|png',
                'max_size'       => 5000
            );

            $this->load->library('upload', $config);

            if ($this->form_validation->run() == TRUE) {
                
                //menangkap data input dari view
                $category   = $this->input->post('category');
                $name       = $this->input->post('name');
                $description= $this->input->post('description');

                $id_user       = $this->session->userdata('id');
                

                $input = array(

                    'id_category'       => $category,
                    'id_designer'       => $id_user,
                    'nama_catalog'      => $name,
                    'deskripsi_catalog' => $description,
                );
        
                $this->catalog_model->insert($input);

                if (!$this->upload->do_upload('userfile')) {
        
                    $id_user       = $this->session->userdata('id');
                    $user          = $this->session->userdata('nama');
                    $data_category = $this->category_model->read();
            
                    //respon alasan kenapa gagal upload
                    $response = $this->upload->display_errors();
                    
                    $data = array(
                        'judul' => 'MYN - Tambah Catalog',
                        'page' => 'client/mycatalog/add',
                        'response'   => $response,
                        'id_user'=> $id_user,
                        'user' => $user,
                        'category' => $data_category,
                    );
            
                    $this->load->view('theme/client/index', $data);
            
                //jika berhasil upload
                } else {
                    $this->upload->do_upload('userfile');
                    $upload_data = $this->upload->data('file_name');
                    
                    $name = $this->input->post('name');
                    //mengirim data ke model
                    $input = array(
                        //format : nama field/kolom table => data input dari view
                        'image_master'      => $upload_data
                    );

                    $this->db->where('nama_catalog', $name);
                    $this->db->update('catalog', $input);
            
                    //memanggil function insert pada kota model
                    //function insert berfungsi menyimpan/create data ke table buku di database

                    //mengembalikan halaman ke function read
                }

                if (!$this->upload->do_upload('support1')) {
        
                    $id_user       = $this->session->userdata('id');
                    $user          = $this->session->userdata('nama');
                    $data_category = $this->category_model->read();
            
                    //respon alasan kenapa gagal upload
                    $response = $this->upload->display_errors();
                    
                    $data = array(
                        'judul' => 'MYN - Tambah Catalog',
                        'page' => 'client/mycatalog/add',
                        'response'   => $response,
                        'id_user'=> $id_user,
                        'user' => $user,
                        'category' => $data_category,
                    );
            
                    $this->load->view('theme/client/index', $data);
            
                //jika berhasil upload
                } else {
                    $this->upload->do_upload('support1');
                    $upload_data = $this->upload->data('file_name');
                    
                    $name = $this->input->post('name');
                    //mengirim data ke model
                    $input = array(
                        //format : nama field/kolom table => data input dari view
                        'img_supp1'      => $upload_data
                    );

                    $this->db->where('nama_catalog', $name);
                    $this->db->update('catalog', $input);
            
                    //memanggil function insert pada kota model
                    //function insert berfungsi menyimpan/create data ke table buku di database

                    //mengembalikan halaman ke function read
                }

                if (!$this->upload->do_upload('support2')) {
        
                    $id_user       = $this->session->userdata('id');
                    $user          = $this->session->userdata('nama');
                    $data_category = $this->category_model->read();
            
                    //respon alasan kenapa gagal upload
                    $response = $this->upload->display_errors();
                    
                    $data = array(
                        'judul' => 'MYN - Tambah Catalog',
                        'page' => 'client/mycatalog/add',
                        'response'   => $response,
                        'id_user'=> $id_user,
                        'user' => $user,
                        'category' => $data_category,
                    );
            
                    $this->load->view('theme/client/index', $data);
            
                //jika berhasil upload
                } else {
                    $this->upload->do_upload('support2');
                    $upload_data = $this->upload->data('file_name');
                    
                    $name = $this->input->post('name');
                    //mengirim data ke model
                    $input = array(
                        //format : nama field/kolom table => data input dari view
                        'img_supp2'      => $upload_data
                    );

                    $this->db->where('nama_catalog', $name);
                    $this->db->update('catalog', $input);
            
                    //memanggil function insert pada kota model
                    //function insert berfungsi menyimpan/create data ke table buku di database

                    //mengembalikan halaman ke function read
                }

                if (!$this->upload->do_upload('support3')) {
        
                    $id_user       = $this->session->userdata('id');
                    $user          = $this->session->userdata('nama');
                    $data_category = $this->category_model->read();
            
                    //respon alasan kenapa gagal upload
                    $response = $this->upload->display_errors();
                    
                    $data = array(
                        'judul' => 'MYN - Tambah Catalog',
                        'page' => 'client/mycatalog/add',
                        'response'   => $response,
                        'id_user'=> $id_user,
                        'user' => $user,
                        'category' => $data_category,
                    );
            
                    $this->load->view('theme/client/index', $data);
            
                //jika berhasil upload
                } else {
                    $this->upload->do_upload('support3');
                    $upload_data = $this->upload->data('file_name');
                    
                    $name = $this->input->post('name');
                    //mengirim data ke model
                    $input = array(
                        //format : nama field/kolom table => data input dari view
                        'img_supp3'      => $upload_data
                    );

                    $this->db->where('nama_catalog', $name);
                    $this->db->update('catalog', $input);
            
                    //memanggil function insert pada kota model
                    //function insert berfungsi menyimpan/create data ke table buku di database

                    //mengembalikan halaman ke function read
                }

                redirect('mycatalog');
                
            }

        }
    }

    public function edit(){

        $id = $this->uri->segment(3);

        $data_catalog = $this->catalog_model->read_single($id);

        $id_user       = $this->session->userdata('id');
        $user          = $this->session->userdata('nama');
        $data_category = $this->category_model->read();

        $data = array(
            'judul' => 'MYN - Edit Catalog',
            'page' => 'client/mycatalog/edit',
            'user' => $user,
            'category' => $data_category,
            'catalog' => $data_catalog
        );

        $this->load->view('theme/client/index', $data);
    }

    public function detail(){

        $user = $this->session->userdata('nama');

        $id = $this->uri->segment(3);

        // $data_image = $this->catalog_model->read_image($id);

        $data_catalog = $this->catalog_model->read_single($id);

        $data = array(
            'judul' => 'MYN - Edit Catalog',
            'page' => 'client/mycatalog/detail',
            'user' => $user,
            'catalog' => $data_catalog,
        );

        $this->load->view('theme/client/index', $data);

    }

    public function edit_submit(){

        if ($this->input->post('submit') == 'Simpan'){

            //aturan validasi input login
            $this->form_validation->set_rules('category', 'Category', 'required');
            $this->form_validation->set_rules('name', 'Judul Catalog', 'required');
            $this->form_validation->set_rules('description', 'Deskripsi Catalog', 'required');

            //setting library upload
            $config = array (
                'upload_path'    => './files/',
                'allowed_types'  => 'jpeg|jpg|png',
                'max_size'       => 5000
            );

            $this->load->library('upload', $config);

            if ($this->form_validation->run() == true){

                $category   = $this->input->post('category');
                $name       = $this->input->post('name');
                $description= $this->input->post('description');
                $master = $this->input->post('master');
                $sup1 = $this->input->post('sup1');
                $sup2 = $this->input->post('sup2');
                $sup3 = $this->input->post('sup3');

                $id_user = $this->session->userdata('id');
                
                $id = $this->uri->segment(3);

                $input = array(

                    'id_category'       => $category,
                    'id_designer'       => $id_user,
                    'nama_catalog'      => $name,
                    'deskripsi_catalog' => $description
                );

                $this->db->where('id_catalog', $id);
                $this->db->update('catalog', $input);
            }

            if (!$this->upload->do_upload('userfile')) {
        
                $id_user       = $this->session->userdata('id');
                $user          = $this->session->userdata('nama');
                $data_category = $this->category_model->read();
        
                //respon alasan kenapa gagal upload
                $response = $this->upload->display_errors();
                
                $data = array(
                    'judul' => 'MYN - Tambah Catalog',
                    'page' => 'client/mycatalog/add',
                    'response'   => $response,
                    'id_user'=> $id_user,
                    'user' => $user,
                    'category' => $data_category,
                );
        
                $this->load->view('theme/client/index', $data);
        
            //jika berhasil upload
            } else {
                $this->upload->do_upload('userfile');
                $upload_data = $this->upload->data('file_name');

                $id = $this->uri->segment(3);
                
                //mengirim data ke model
                $input = array(
                    //format : nama field/kolom table => data input dari view
                    'image_master'      => $upload_data
                );

                $this->db->where('id_catalog', $id);
                $this->db->update('catalog', $input);
        
                //memanggil function insert pada kota model
                //function insert berfungsi menyimpan/create data ke table buku di database

                //mengembalikan halaman ke function read
            }

            if (!$this->upload->do_upload('support1')) {
    
                $id_user       = $this->session->userdata('id');
                $user          = $this->session->userdata('nama');
                $data_category = $this->category_model->read();
        
                //respon alasan kenapa gagal upload
                $response = $this->upload->display_errors();
                
                $data = array(
                    'judul' => 'MYN - Tambah Catalog',
                    'page' => 'client/mycatalog/add',
                    'response'   => $response,
                    'id_user'=> $id_user,
                    'user' => $user,
                    'category' => $data_category,
                );
        
                $this->load->view('theme/client/index', $data);
        
            //jika berhasil upload
            } else {
                $this->upload->do_upload('support1');
                $upload_data = $this->upload->data('file_name');
                
                $id = $this->uri->segment(3);
                //mengirim data ke model
                $input = array(
                    //format : nama field/kolom table => data input dari view
                    'img_supp1'      => $upload_data
                );

                $this->db->where('id_catalog', $id);
                $this->db->update('catalog', $input);
        
                //memanggil function insert pada kota model
                //function insert berfungsi menyimpan/create data ke table buku di database

                //mengembalikan halaman ke function read
            }

            if (!$this->upload->do_upload('support2')) {
    
                $id_user       = $this->session->userdata('id');
                $user          = $this->session->userdata('nama');
                $data_category = $this->category_model->read();
        
                //respon alasan kenapa gagal upload
                $response = $this->upload->display_errors();
                
                $data = array(
                    'judul' => 'MYN - Tambah Catalog',
                    'page' => 'client/mycatalog/add',
                    'response'   => $response,
                    'id_user'=> $id_user,
                    'user' => $user,
                    'category' => $data_category,
                );
        
                $this->load->view('theme/client/index', $data);
        
            //jika berhasil upload
            } else {
                $this->upload->do_upload('support2');
                $upload_data = $this->upload->data('file_name');
                
                $id = $this->uri->segment(3);
                //mengirim data ke model
                $input = array(
                    //format : nama field/kolom table => data input dari view
                    'img_supp2'      => $upload_data
                );

                $this->db->where('id_catalog', $id);
                $this->db->update('catalog', $input);
        
                //memanggil function insert pada kota model
                //function insert berfungsi menyimpan/create data ke table buku di database

                //mengembalikan halaman ke function read
            }

            if (!$this->upload->do_upload('support3')) {
    
                $id_user       = $this->session->userdata('id');
                $user          = $this->session->userdata('nama');
                $data_category = $this->category_model->read();
        
                //respon alasan kenapa gagal upload
                $response = $this->upload->display_errors();
                
                $data = array(
                    'judul' => 'MYN - Tambah Catalog',
                    'page' => 'client/mycatalog/add',
                    'response'   => $response,
                    'id_user'=> $id_user,
                    'user' => $user,
                    'category' => $data_category,
                );
        
                $this->load->view('theme/client/index', $data);
        
            //jika berhasil upload
            } else {
                $this->upload->do_upload('support3');
                $upload_data = $this->upload->data('file_name');
                
                $id = $this->uri->segment(3);
                //mengirim data ke model
                $input = array(
                    //format : nama field/kolom table => data input dari view
                    'img_supp3'      => $upload_data
                );

                $this->db->where('id_catalog', $id);
                $this->db->update('catalog', $input);
        
                //memanggil function insert pada kota model
                //function insert berfungsi menyimpan/create data ke table buku di database

                //mengembalikan halaman ke function read
            }

            $this->session->set_userdata('message', 'Sukses, data berhasil diubah');
            redirect('mycatalog');
        }

    }

    public function delete(){

        $id = $this->uri->segment(3);

        $this->db->where('id_catalog', $id);
        $this->db->delete('catalog');

        $this->session->set_flashdata('message' , 'Sukses data berhasil dihapus');
        redirect('mycatalog');
    }
}