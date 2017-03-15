<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_kaprodi extends CI_Model {

  public $table = 'dospres_formulir_kaprodi';
  public $id = 'id_formulir_kaprodi';

  public function data()
  {
    $query = $this->db->get('dospres_formulir_kaprodi');
    return $query->result_array();
  }
  }