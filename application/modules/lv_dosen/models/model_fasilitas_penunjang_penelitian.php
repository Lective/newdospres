<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_fasilitas_penunjang_penelitian extends CI_Model {

  public $table = 'dospres_fasilitas_penunjang_penelitian';
  public $id = 'id_fasilitas_penunjang_penelitian';

  public function data()
  {
    $query = $this->db->get('dospres_fasilitas_penunjang_penelitian');
    return $query->result_array();
  }

  public function addData($data)
  {
    $this->db->insert('dospres_fasilitas_penunjang_penelitian', $data);
    return TRUE;
  }

  public function deleteData($id)
  {
    $this->db->where('id_fasilitas_penunjang_penelitian', $id)
             ->delete('dospres_fasilitas_penunjang_penelitian');
  }

  public function findData($id)
  {
    $hasil = $this->db->where('id_fasilitas_penunjang_penelitian', $id)
                       ->limit(1) 
                       ->get('dospres_fasilitas_penunjang_penelitian');
    if ($hasil->num_rows() > 0) {
      return $hasil->row();
    } else {
      return array();
    }
  }

  public function updateData($id, $data_fasilitas)
  {
    $this->db->where('id_fasilitas_penunjang_penelitian', $id)
             ->update('dospres_fasilitas_penunjang_penelitian', $data_fasilitas);
  }

}
