<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voting extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->model('model_kaprodi');
		$this->load->model('model_kaprodi_voting');

	}
	public function index()
	{
		$data_kaprodi=array(
			'data_kaprodi' => $this->model_kaprodi->data()
		);
		$this->load->view('view_voting', $data_kaprodi);
	}

	public function addVoting(){
		$data_kaprodi=array(
			'data_kaprodi' => $this->model_kaprodi->data()
		);
	
		$data = array(
	        'nidn' 						=> $this->input->post('nidn'),
	        'nilai' 					=> $this->input->post('nilai'),
	        'nidn_vote'	 				=> $this->input->post('nidn_vote'),
	        'email_vote'				=> $this->input->post('email_vote'),
	        'tahun' 					=> $this->input->post('tahun'),
	        'alasan' 					=> $this->input->post('alasan'),
	        'id_program_studi' 			=> $this->input->post('id_program_studi')
	        
    	);
    		$this->model_kaprodi_voting->addData($data);
    		$this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Voting Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
   			redirect('Voting');
	}
}