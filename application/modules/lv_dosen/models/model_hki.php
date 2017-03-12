<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_hki extends CI_Model {

  public $table = 'dospres_hki';
  public $id = 'id_hki';

  public function data()
  {
    $query = $this->db->get('dospres_hki');
    return $query->result_array();
  }

  public function addData($data)
  {
    $this->db->insert('dospres_hki', $data);
    return TRUE;
  }

  public function deleteData($id)
  {
    $this->db->where('id_hki', $id)
             ->delete('dospres_hki');
  }

  public function findData($id)
  {
    $hasil = $this->db->where('id_hki', $id)
                       ->limit(1) 
                       ->get('dospres_hki');
    if ($hasil->num_rows() > 0) {
      return $hasil->row();
    } else {
      return array();
    }
  }

  public function updateData($id, $data_hki)
  {
    $this->db->where('id_hki', $id)
             ->update('dospres_hki', $data_hki);
  }

}
