<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_kaprodi_voting extends CI_Model {

  public $table = 'dospres_kaprodi_berprestasi';
  public $id = 'id_kaprodi_berprestasi';

  public function data()
  {
    $query = $this->db->get('dospres_kaprodi_berprestasi');
    return $query->result_array();
  }
  public function findData($id)
  {
    $hasil = $this->db->where('id_kaprodi_berprestasi', $id)
                       ->limit(1) 
                       ->get('dospres_kaprodi_berprestasi');
    if ($hasil->num_rows() > 0) {
      return $hasil->row();
    } else {
      return array();
    }
  }
  public function addData($data)
  {
    $this->db->insert('dospres_kaprodi_berprestasi', $data);
    return TRUE; 
  }
}