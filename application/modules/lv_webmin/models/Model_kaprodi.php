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

  public function findData($id)
  {
    $hasil = $this->db->where('id_formulir_kaprodi', $id)
                       ->limit(1) 
                       ->get('dospres_formulir_kaprodi');
    if ($hasil->num_rows() > 0) {
      return $hasil->row();
    } else {
      return array();
    }
  }

  public function addData($data)
  {
    $this->db->insert('dospres_formulir_kaprodi', $data);
    return TRUE; 
  }

  public function deleteData($id)
  {
    $this->db->where('id_formulir_kaprodi', $id)
             ->delete('dospres_formulir_kaprodi');
  }

  public function updateData($id, $data_kaprodi)
  {
    $this->db->where('id_formulir_kaprodi', $id)
             ->update('dospres_formulir_kaprodi', $data_kaprodi);
  }
  

}
