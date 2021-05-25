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
}