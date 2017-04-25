<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cakaprodi extends CI_Controller {

	private $sess;
	function __construct()
	{
		parent::__construct();
		if (!$this->mauth->islogin()) {
			redirect('login');
		}
		if (!$this->mauth->permission(array('1'))) die('you dont have permission to this page');
		$this->sess = $this->mauth->getSession();
	}
	function index()
	{
		$data = array(
			'data' => $this->mcrud->pull('calon_kaprodi_berprestasi')->result(),
			'alert' => $this->session->alert);
		$this->load->view('cakaprodi/view_main', $data);
	}
	public function add()
	{
		$data = array(
	        'nidn' 				=> $this->input->post('dosen'),
	        'tahun' 			=> $this->input->post('tahun')
    	);
    	
    	$this->mdosen->createIfNull($data['nidn']);

		$this->model_cakaprodi->addData($data);
		$this->session->set_flashdata('notif','<div class="alert alert-success bg-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('cakaprodi');
	}
	function hapus($id)
	{

	}
}
