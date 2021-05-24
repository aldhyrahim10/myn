<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog_model extends CI_Model{

    public function read(){

        $this->db->select('*');
        $this->db->from('catalog');
        $this->db->join('designer', 'catalog.id_designer=designer.id_designer');
        $this->db->join('category', 'catalog.id_category=category.id_category');
        

        $query = $this->db->get();

        return $query->result_array();
    }

    public function read_single($id){

        $this->db->select('*');
        $this->db->from('catalog');
        $this->db->join('designer', 'catalog.id_designer=designer.id_designer');
        $this->db->join('category', 'catalog.id_category=category.id_category');
        $this->db->where('id_catalog', $id);


        $query = $this->db->get();

        return $query->row_array();
    }
}