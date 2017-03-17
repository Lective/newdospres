<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_dospres extends CI_Model {

  public $table = 'dospres_calon_dosen_berprestasi';
  public $id = 'id_calon_dospres';

  public function data()
  {
    $query = $this->db->get('dospres_calon_dosen_berprestasi');
    return $query->result_array();
  }
}