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
    
}