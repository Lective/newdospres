<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_calon_dospres extends CI_Model {

  public $table = 'dospres_calon_dosen_berprestasi';
  public $id = 'id_calon_dospres';

  public function data()
  {
    $query = $this->db->get('dospres_calon_dosen_berprestasi');
    return $query->result_array();
  }

  public function findData($id)
  {
    $hasil = $this->db->where('id_calon_dospres', $id)
                       ->limit(1) 
                       ->get('dospres_calon_dosen_berprestasi');
    if ($hasil->num_rows() > 0) {
      return $hasil->row();
    } else {
      return array();
    }
  }

  public function addData($data)
  {
    $this->db->insert('dospres_calon_dosen_berprestasi', $data);
    return TRUE; 
  }

  public function deleteData($id)
  {
    $this->db->where('id_calon_dospres', $id)
             ->delete('dospres_calon_dosen_berprestasi');
  }

  public function updateData($id, $data_kaprodi)
  {
    $this->db->where('id_calon_dospres', $id)
             ->update('ddospres_calon_dosen_berprestasi', $data_dospres);
  }
  

}