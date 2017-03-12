<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_luaran_lain extends CI_Model {

  public $table = 'dospres_luaran_lain';
  public $id = 'id_luaran_lain';

  public function data()
  {
    $query = $this->db->get('dospres_luaran_lain');
    return $query->result_array();
  }

  public function addData($data)
  {
    $this->db->insert('dospres_luaran_lain', $data);
    return TRUE;
  }

  public function deleteData($id)
  {
    $this->db->where('id_luaran_lain', $id)
             ->delete('dospres_luaran_lain');
  }

  public function findData($id)
  {
    $hasil = $this->db->where('id_luaran_lain', $id)
                       ->limit(1) 
                       ->get('dospres_luaran_lain');
    if ($hasil->num_rows() > 0) {
      return $hasil->row();
    } else {
      return array();
    }
  }

  public function updateData($id, $data_luaran)
  {
    $this->db->where('id_luaran_lain', $id)
             ->update('dospres_luaran_lain', $data_luaran);
  }

}
