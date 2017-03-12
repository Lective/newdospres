<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_buku_ajar extends CI_Model {

  public $table = 'dospres_buku_ajar';
  public $id = 'id_buku_ajar';

  public function data()
  {
    $query = $this->db->get('dospres_buku_ajar');
    return $query->result_array();
  }

  public function findData($id)
  {
    $hasil = $this->db->where('id_buku_ajar', $id)
                       ->limit(1) 
                       ->get('dospres_buku_ajar');
    if ($hasil->num_rows() > 0) {
      return $hasil->row();
    } else {
      return array();
    }
  }

  public function addData($data)
  {
    $this->db->insert('dospres_buku_ajar', $data);
    return TRUE; 
  }

  public function deleteData($id)
  {
    $this->db->where('id_buku_ajar', $id)
             ->delete('dospres_buku_ajar');
  }

  public function updateData($id, $data_buku)
  {
    $this->db->where('id_buku_ajar', $id)
             ->update('dospres_buku_ajar', $data_buku);
  }
  

}
