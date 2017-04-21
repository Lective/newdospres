<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Model_dospres_voting extends CI_Model {

  public $table = 'dospres_dosen_berprestasi';
  public $id = 'id_dospres';

  public function data()
  {
    $query = $this->db->get('dospres_dosen_berprestasi');
    return $query->result_array();
  }
  public function findData($nidn)
  {
    $hasil = $this->db->where('nidn', $nidn)
                       ->limit(1) 
                       ->get('dospres_dosen_berprestasi');
    if ($hasil->num_rows() > 0) {
      return $hasil->row();
    } else {
      return array();
    }
  }
  public function addData($data)
  {
    $this->db->insert('dospres_dosen_berprestasi', $data);
    return TRUE; 
  }
}