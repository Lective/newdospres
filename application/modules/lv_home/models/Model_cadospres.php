<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_cadospres extends CI_Model {

  public $table = 'dospres_view_voting_dospres';
  public $nidn = 'nidn';

  public function data()
  {
    $query = $this->db->get('dospres_view_voting_dospres');
    return $query->result_array();
  }
  public function get($nidn){
  	$hasil = $this->db->where('nidn', $nidn)
                       ->limit(1) 
                       ->get('dospres_view_voting_dospres');
    if ($hasil->num_rows() > 0) {
      return $hasil->row();
    } else {
      return array();
    }
  }

}