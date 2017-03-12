<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penelitian_hibah_ditlitabmas extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_penelitian_hibah_ditlitabmas');
	}

	public function index()
	{
		$dataDitlitabmas=array(
			'dataDitlitabmas' => $this->model_penelitian_hibah_ditlitabmas->data()
		);
		$this->load->view('penelitian_hibah_ditlitabmas/view_main', $dataDitlitabmas);
	}

	public function tambahData()
	{
		$data = array(
	        'nama_skim' 						=> $this->input->post('nama'),
	        'judul' 							=> $this->input->post('judul'),
	        'jumlah_dana'	 				=> $this->input->post('jumlah_dana'),
	        'nama_ketua'					=> $this->input->post('nama_ketua'),
	        'nama_anggota'					=> $this->input->post('nama_anggota'),
	        'bidang_penelitian'				=> $this->input->post('penelitian'),
	        'bidang_penelitian_lain' 		=> $this->input->post('penelitian_lain'),
	        'tujuan_sosial_ekonomi' 			=> $this->input->post('sosial_ekonomi'),
	        'tujuan_sosial_ekonomi_lain' 	=> $this->input->post('sosial_ekonomi_lain'),
	        'tahun' 						=> $this->input->post('tahun')
    	);
    		$this->model_penelitian_hibah_ditlitabmas->addData($data);
    		$this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
   			redirect('hibah-ditlitabmas');
	}

	public function hapusData($id)
	{
        $this->model_penelitian_hibah_ditlitabmas->deleteData($id);
        $this->session->set_flashdata('notif','<div class="alert alert-success bg-danger" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    	redirect('hibah-ditlitabmas'); 
    }
}
