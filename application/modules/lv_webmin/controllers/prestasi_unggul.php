<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi_unggul extends CI_Controller {
		public function __construct()
	{
		parent::__construct();
		$this->load->model('model_unggul');
	}

	public function index()
	{
		$data['data_unggul'] = $this->model_unggul->data();
		$this->load->view('prestasi_unggul/view_main', $data);
	}

	public function tambahData()
	{
		$data = array(
	        'nidn' 						=> $this->input->post('nidn'),
	        'nama_lengkap' 				=> $this->input->post('nama_lengkap'),
	        'jabatan_akademik'	 		=> $this->input->post('id_fakultas'),
	        'pangkat_dan_golongan'		=> $this->input->post('id_program_studi'),
	        'tempat_lahir' 				=> $this->input->post('tempat_lahir'),
	        'tanggal_lahir' 			=> $this->input->post('tanggal_lahir'),
	        'jenis_kelamin' 			=> $this->input->post('jenis_kelamin'),
	        'bidang_keahlian' 			=> $this->input->post('bidang_keahlian'),
	        'no_hp' 					=> $this->input->post('no_hp'),
	        'email' 					=> $this->input->post('email'),
	        'file_makalah' 				=> $this->input->post('file_makalah'),
	        'tahun' 					=> $this->input->post('tahun'),
	        'id_fakultas' 				=> $this->input->post('id_fakultas'),
	        'id_program_studi' 			=> $this->input->post('id_program_studi')
    	);
    		$this->model_unggul->addData($data);
    		$this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
   			redirect('webmin/prestasi_unggul');
	}

}
