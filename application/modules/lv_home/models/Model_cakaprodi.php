<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_cakaprodi extends CI_Model {

  public $table = 'dospres_view_voting_kaprodi';
  public $id = 'id_calon_kaprodi';

  public function data()
  {
    $query = $this->db->get('dospres_view_voting_kaprodi');
    return $query->result_array();
  }

}