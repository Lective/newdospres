<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemakalah_forum_ilmiah extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_pemakalah_forum_ilmiah');
	}

	public function index()
	{
		$dataPemakalah=array(
			'dataPemakalah' => $this->model_pemakalah_forum_ilmiah->data()
		);
		$this->load->view('pemakalah_forum_ilmiah/view_main', $dataPemakalah);
	}

	public function tambahData()
	{
		$data = array(
	        'status_pemakalah' 				=> $this->input->post('status'),
	        'judul_pemakalah' 				=> $this->input->post('judul'),
	        'nama_forum'	 				=> $this->input->post('nama'),
	        'institusi_penyelenggara'		=> $this->input->post('institusi'),
	        'tgl_mulai_pelaksanaan'			=> $this->input->post('tgl_mulai'),
	        'tgl_akhir_pelaksanaan'			=> $this->input->post('tgl_selesai'),
	        'tempat_pelaksanaan' 			=> $this->input->post('tempat'),
	        'keterangan_invalid' 			=> $this->input->post('keterangan'),
	        'tahun' 						=> $this->input->post('tahun')
    	);
    		$this->model_pemakalah_forum_ilmiah->addData($data);
    		$this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
   			redirect('forum-ilmiah');
	}

	public function hapusData($id)
	{
        $this->model_pemakalah_forum_ilmiah->deleteData($id);
        $this->session->set_flashdata('notif','<div class="alert alert-success bg-danger" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    	redirect('forum-ilmiah'); 
    }

}
