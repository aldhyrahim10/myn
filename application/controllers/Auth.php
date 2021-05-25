<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function login(){

        $data = array(
            'judul' => 'MYN - Sign In',
        );

        $this->load->view('client/auth/login', $data);
    }

    public function register(){

        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('hp', 'No. Handphone', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'required|trim|min_length[8]|matches[password]');


        if($this->form_validation->run() == false){
            
            $data = array(
                'judul' => 'MYN - Sign Up',
            );
    
            $this->load->view('client/auth/register', $data);

        } else {

            $nama = $this->input->post('name');
            $email = $this->input->post('email');
            $hp = $this->input->post('hp');
            $alamat = $this->input->post('alamat');
            $password = $this->input->post('password');

            $password_encrypt = md5($password);

            $data1 = array(
                'nama' => $nama,
                'email' => $email,
                'password' => $password_encrypt,
                'role' => 2,
                'status' => 0
            );

            $data2 = array(
                'nama_designer' => $nama,
                'telp_designer' => $hp,
                'alamat_designer' => $alamat
            ); 
            
            $this->db->insert('user', $data1);

            $this->db->insert('designer', $data2);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Pendaftaran akun berhasil, silahkan tunggu +- 24 jam untuk pengaktifan akun oleh admin <br> Terima Kasih... </div>');

            redirect('auth/login');

        }

        

    }
}