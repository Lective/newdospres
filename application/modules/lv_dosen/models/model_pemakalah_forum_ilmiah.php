<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pemakalah_forum_ilmiah extends CI_Model {

  public $table = 'dospres_pemakalah_forum_ilmiah';
  public $id = 'id_pemakalah_forum_ilmiah';

  public function data()
  {
    $query = $this->db->get('dospres_pemakalah_forum_ilmiah');
    return $query->result_array();
  }

  public function addData($data)
  {
    $this->db->insert('dospres_pemakalah_forum_ilmiah', $data);
    return TRUE;
  }

  public function deleteData($id)
  {
    $this->db->where('id_pemakalah_forum_ilmiah', $id)
             ->delete('dospres_pemakalah_forum_ilmiah');
  }

  public function findData($id)
  {
    $hasil = $this->db->where('id_pemakalah_forum_ilmiah', $id)
                       ->limit(1) 
                       ->get('dospres_pemakalah_forum_ilmiah');
    if ($hasil->num_rows() > 0) {
      return $hasil->row();
    } else {
      return array();
    }
  }

  public function updateData($id, $data_pemakalah)
  {
    $this->db->where('id_fasilitas_penunjang_penelitian', $id)
             ->update('dospres_pemakalah_forum_ilmiah', $data_pemakalah);
  }

}
