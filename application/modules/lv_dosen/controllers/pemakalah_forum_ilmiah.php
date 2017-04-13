<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemakalah_forum_ilmiah extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if (!$this->mauth->islogin()) {
			redirect('login');
		}
		if (!$this->mauth->permission(array('2'))) die('you dont have permission to this page');
		$this->sess = $this->mauth->getSession();

		$this->load->model('model_pemakalah_forum_ilmiah');
	}
	public function index($nidn = 0)
	{
		$tahun = $this->input->get('tahun', true);
		if(empty($tahun)) $tahun = date('Y');
		if(empty($nidn) && $nidn == 0){
			$res = $this->mcrud->pull('view_pemakalah_forum_ilmiah', array('tahun' => $tahun));
			$dataBuku=array(
				'notif' => $this->session->notif,
				'selectTahun' => $tahun,
				'dataPemakalah' => $res->result(),
				'tahun_list' => $this->mcrud->pull_group('pemakalah_forum_ilmiah', null, 'tahun')->result()
			);
			$this->load->view('pfi/view_main_dppm', $dataBuku);
		}
		else{
			$res = $this->mcrud->pull('pemakalah_forum_ilmiah', array('nidn' => $nidn));
		}
		// $dataPemakalah=array(
		// 	'dataPemakalah' => $this->model_pemakalah_forum_ilmiah->data()
		// );
		// $this->load->view('pemakalah_forum_ilmiah/view_main', $dataPemakalah);
	}

	public function add()
	{
		$data = array(
	        'nidn' 				=> $this->input->post('dosen'),
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


}
