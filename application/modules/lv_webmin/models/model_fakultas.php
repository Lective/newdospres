<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_fakultas extends CI_Model {

  public $table = 'dospres_fakultas';
  public $id = 'id_fakultas';

  public function data()
  {
    $query = $this->db->get('dospres_fakultas');
    return $query->result_array();
  }
  public function fak($id){
  		$this->db->get('dospres_fakultas', $id);
  }
  public function findData($id)
  {
    $hasil = $this->db->where('id_fakultas', $id)
                       ->limit(1) 
                       ->get('dospres_fakultas');
    if ($hasil->num_rows() > 0) {
      return $hasil->row();
    } else {
      return array();
    }
  }
    
}