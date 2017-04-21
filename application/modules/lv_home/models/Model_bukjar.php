<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_bukjar extends CI_Model {

  public $table = 'dospres_buku_ajar';
  public $nidn = 'nidn';

  public function data()
  {
    $query = $this->db->get('dospres_buku_ajar');
    return $query->result_array();
  }
  public function detail($nidn){
  	$hasil = $this->db->where('nidn', $nidn) 
                       ->get('dospres_buku_ajar');
    if ($hasil->num_rows() > 0) {
      return $hasil->row();
    } else {
      return array();
    }
  }

}