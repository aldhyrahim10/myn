<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model{

    public function catalog(){
        // sql read
        $this->db->select('COUNT(id_catalog)  as total');
        $this->db->from('catalog');
        $query = $this->db->get();

		// $query -> result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();

    }

    public function designer(){

        $this->db->select('COUNT(id_designer)  as total');
        $this->db->from('designer');
        $query = $this->db->get();

		// $query -> result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();

    }

    public function category(){

        $this->db->select('COUNT(id_category)  as total');
        $this->db->from('category');
        $query = $this->db->get();

		// $query -> result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();

    }
}