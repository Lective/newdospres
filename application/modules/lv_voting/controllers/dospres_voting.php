<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dospres_Voting extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->model('model_dospres');
		$this->load->model('model_dospres_voting');

	}
	public function index()
	{
		$datadospres=array(
			'datadospres' => $this->model_dospres->data()
		);
		$this->load->view('view_voting_dospres', $datadospres);
	}

	public function addVoting(){
		$data = array(
	        'nidn' 						=> $this->input->post('nidn'),
	        'nilai' 					=> $this->input->post('nilai'),
	        'nidn_vote'	 				=> $this->input->post('nidn_vote'),
	        'email_vote'				=> $this->input->post('email_vote'),
	        'tahun' 					=> $this->input->post('tahun'),
	        'alasan' 					=> $this->input->post('alasan'),
	        'id_program_studi' 			=> $this->input->post('id_program_studi')
	        
    	);
    		$this->model_dospres_voting->addData($data);
    		$this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Voting Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
   			redirect('voting-dospres');
	}
}