<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model{

    public function read(){

        $this->db->select('*');
        $this->db->from('category');

        $query = $this->db->get();

        return $query->result_array();
    }

    public function read_single($id){

        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('id_category',$id);

        $query = $this->db->get();

        return $query->row_array();
    }

    public function insert($input){

        return $this->db->insert('category',$input); 
    }

    public function update($input,$id){

        $this->db->where('id_category',$id);
    
        return $this->db->update('category', $input);
    }

    public function delete($id){

        $this->db->where('id_category',$id);

        return $this->db->delete('category');
    }
}