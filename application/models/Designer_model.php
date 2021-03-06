<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designer_model extends CI_Model {

    public function read_user(){

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role', 2);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function read_single($id){

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $id);

        $query = $this->db->get();

        return $query->row_array();
    }

    public function read_designer(){

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role', 2);
        $this->db->where('status', 1);

        $query = $this->db->get();

        return $query->result_array();
    }


}