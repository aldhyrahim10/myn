<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function login(){

        $this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if($this->form_validation->run() == false){
            $data = array(
                'judul' => 'MYN - Sign In',
            );
    
            $this->load->view('client/auth/login', $data);
        } else {

            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $password_login = md5($password);

            $user = $this->db->get_where('user', ['email' => $email, 'password' => $password_login])->row_array();

            if($user){

                if($user['status'] == 1 ){

                    if($user['role'] == 2){

                        $data = array(
                            'email' => $user['email'],
                            'nama' => $user['nama'],
                            'id' => $user['id']
                        );
    
                        $this->session->set_userdata($data);
    
                        redirect('home');

                    } else {

                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf, hanya designer yang dapat melakukan Sign In</div>');
                        
                        redirect('auth/login');

                    }

                    
                } else {

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf, akun anda belum terverifikasi, silahkan hubungi admin untuk melakukan verifikasi </div>');
                    
                    redirect('auth/login');
                }

            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email atau Password salah </div>');

                redirect('auth/login');

            }
        }   
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
                'telp_user' => $hp,
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

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pendaftaran akun berhasil, silahkan tunggu +- 24 jam untuk pengaktifan akun oleh admin <br> Terima Kasih... </div>');

            redirect('auth/login');

        }
    }

    public function logout(){

        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('email');

        redirect('login');
    }

    public function myprofile(){

        $user = $this->session->userdata('nama');

        $data_profile = $this->db->get_where('designer', ['nama_designer' => $user])->row_array();

        $data = array(
            'judul' => 'MYN - MY Profile',
            'page' => 'client/myprofile',
            'user' => $user,
            'profile' => $data_profile
        );

        $this->load->view('theme/client/index', $data);
    }

    public function edit(){

        $user = $this->session->userdata('nama');

        $nama = $this->input->post('name');
        $hp = $this->input->post('telp');
        $alamat = $this->input->post('alamat');

        if($this->input->post('foto') == '' ){

            $user = $this->session->userdata('nama');

            $profile = $this->input->post('gambar');

            $data = array(
                'nama_designer' => $nama,
                'telp_designer' => $hp,
                'alamat_designer' => $alamat,
                'profile' => $profile
            );

            $this->db->where('nama_designer', $user);
            $this->db->update('designer', $data);

            $this->session->set_flashdata('message', 'Sukses, Data berhasil diubah');

            redirect('auth/myprofile');
        } else {


        }
    }

    public function changepassword(){
        
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'required|trim|min_length[8]|matches[password]');

        if($this->form_validation->run() == false ){

            
            $this->myprofile();

        } else {

            $user = $this->session->userdata('nama');

            $password = $this->input->post('password');

            $password_new = md5($password);
            
            $data = array(
                'password' => $password_new
            );

            $this->db->where('nama', $user);
            $this->db->update('user', $data);

            $this->session->set_flashdata('message', 'Sukses, Password berhasil diubah');

            redirect('auth/myprofile');
        }
        
    }
}