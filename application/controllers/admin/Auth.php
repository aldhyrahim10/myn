<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

    public function index(){
        
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if($this->form_validation->run() == false){
        
            $this->load->view('admin/login');
        
        } else {

            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $password_login = md5($password);

            $user = $this->db->get_where('user', ['email' => $email, 'password' => $password_login])->row_array();


            if($user){
                
                $data = array (
                    'nama' => $user['nama'],
                    'email' => $user['email']
                );

                $this->session->set_userdata($data);

                redirect('admin/dashboard');

                
            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email atau Password salah </div>');

                redirect('admin/auth');

            }   

        }
        
    }

    public function logout(){
        

        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('email');

        redirect('admin/auth');
        
    }

}