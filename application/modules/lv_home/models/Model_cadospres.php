<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_cadospres extends CI_Model {

  public $table = 'dospres_view_voting_dospres';
  public $id = 'id_calon_dospres';

  public function data()
  {
    $query = $this->db->get('dospres_view_voting_dospres');
    return $query->result_array();
  }

}