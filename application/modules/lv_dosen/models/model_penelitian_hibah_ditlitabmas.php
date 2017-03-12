<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_penelitian_hibah_ditlitabmas extends CI_Model {

  public $table = 'dospres_penelitian_hibah_ditlitabmas';
  public $id = 'id_penelitian_hibah_ditlitabmas';

  public function data()
  {
    $query = $this->db->get('dospres_penelitian_hibah_ditlitabmas');
    return $query->result_array();
  }

  public function addData($data)
  {
    $this->db->insert('dospres_penelitian_hibah_ditlitabmas', $data);
    return TRUE;
  }

  public function deleteData($id)
  {
    $this->db->where('id_penelitian_hibah_ditlitabmas', $id)
             ->delete('dospres_penelitian_hibah_ditlitabmas');
  }

  public function findData($id)
  {
    $hasil = $this->db->where('id_penelitian_hibah_ditlitabmas', $id)
                       ->limit(1) 
                       ->get('dospres_penelitian_hibah_ditlitabmas');
    if ($hasil->num_rows() > 0) {
      return $hasil->row();
    } else {
      return array();
    }
  }

  public function updateData($id, $data_ditlitabmas)
  {
    $this->db->where('id_penelitian_hibah_ditlitabmas', $id)
             ->update('dospres_penelitian_hibah_ditlitabmas', $data_ditlitabmas);
  }

}
