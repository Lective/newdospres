<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_calon_dospres');
	}
	public function index()
	{
		$data_dospres=array(
			'data_dospres' => $this->model_calon_dospres->data()
		);
		$this->load->view('dosen/view_main', $data_dospres);
	}
	public function tambahData()
	{
		$data = array(
	        'nidn' 						=> $this->input->post('nidn'),
	        'nilai' 					=> $this->input->post('nilai'),
	        'tahun'	 					=> $this->input->post('tahun'),
    	);
    		$this->model_calon_dospres->addData($data);
    		$this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
   			redirect('webmin/dosen-berprestasi');
	}

	public function hapusData($id)
	{
        $this->model_calon_dospres->deleteData($id);
        $this->session->set_flashdata('notif','<div class="alert alert-success bg-danger" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    	redirect('webmin/dosen-berprestasi'); 
    }

    public function updateData($id)
    {
	   	$this->form_validation->set_rules('nidn', 'NIDN', 'required');
	    $this->form_validation->set_rules('nilai', 'Nilai', 'required');
	    
		//$this->form_validation->set_rules('id_fakultas', 'Fakultas', 'required');
		//$this->form_validation->set_rules('id_program_studi', 'Program Studi', 'required');
	    if ($this->form_validation->run() == FALSE)
	    {
	      $data['kaprodi'] = $this->model_calon_dospres->findData($id);
	      $this->load->view('dosen/update', $data);
	    } else {
	        $data_dospres = array(
	        'nidn' 						=> $this->input->post('nidn'),
	        'nilai' 				=> $this->input->post('nilai'),
	        'tahun'	 		=> $this->input->post('tahun'),
	        );
	        $this->model_calon_dospres->updateData($id, $data_dospres);
	        $this->session->set_flashdata('notif','<div class="alert alert-success bg-primary" role="alert"> Data Berhasil di Update. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	        redirect('webmin/dosen-berprestasi');
	    }
	}
}
