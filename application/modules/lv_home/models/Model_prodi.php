<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_prodi extends CI_Model {

  public $table = 'dospres_program_studi';
  public $id = 'id_program_studi';

  public function data()
  {
    $query = $this->db->get('dospres_program_studi');
    return $query->result_array();
  }
  
}