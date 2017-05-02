<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_unggul extends CI_Model {

  public $table = 'dospres_prestasi_unggul';
  public $id = 'id_prestasi_unggul';

  public function data()
  {
    $query = $this->db
    ->join('dosen', 'dosen.nidn = dospres_prestasi_unggul.nidn', 'left')
    ->join('program_studi','program_studi.id_program_studi = dospres_prestasi_unggul.id_program_studi')
    ->join('fakultas','fakultas.id_fakultas = dospres_prestasi_unggul.id_fakultas')
    ->get('dospres_prestasi_unggul');
    return $query->result_array();
  }

  public function findData($id)
  {
    $hasil = $this->db->where('id_prestasi_unggul', $id)
                      ->join('dosen', 'dosen.nidn = dospres_prestasi_unggul.nidn', 'left')
                      ->join('program_studi','program_studi.id_program_studi = dospres_prestasi_unggul.id_program_studi')
                      ->join('fakultas','fakultas.id_fakultas = dospres_prestasi_unggul.id_fakultas')
                      ->limit(1) 
                      ->get('dospres_prestasi_unggul');
    if ($hasil->num_rows() > 0) {
      return $hasil->row();
    } else {
      return array();
    }
  }

  public function addData($data)
  {
    $this->db->insert('dospres_prestasi_unggul', $data);
    return TRUE; 
  }

  public function deleteData($id)
  {
    $this->db->where('id_prestasi_unggul', $id)
             ->delete('dospres_prestasi_unggul');
  }

  public function updateData($id, $data_unggul)
  {
    $this->db->where('id_prestasi_unggul', $id)
             ->update('dospres_prestasi_unggul', $data_unggul);
  }
  

}
