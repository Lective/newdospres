<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_cakaprodi extends CI_Model {

  public $table = 'dospres_calon_kaprodi';
  public $id = 'id_calon_kaprodi';

  public function data()
  {
    $query = $this->db->get('dospres_calon_kaprodi');
    return $query->result_array();
  }

  public function findData($id)
  {
    $hasil = $this->db->where('id_calon_kaprodi', $id)
                       ->limit(1) 
                       ->get('dospres_calon_kaprodi');
    if ($hasil->num_rows() > 0) {
      return $hasil->row();
    } else {
      return array();
    }
  }

  public function addData($data)
  {
    $this->db->insert('dospres_calon_kaprodi', $data);
    return TRUE; 
  }

  public function deleteData($id)
  {
    $this->db->where('id_calon_kaprodi', $id)
             ->delete('dospres_calon_kaprodi');
  }

  public function updateData($id, $data_cakaprodi)
  {
    $this->db->where('id_calon_kaprodi', $id)
             ->update('dospres_calon_kaprodi', $data_cakaprodi);
  }
  

}
