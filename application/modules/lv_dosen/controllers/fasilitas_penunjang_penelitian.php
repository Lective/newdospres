<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas_penunjang_penelitian extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_fasilitas_penunjang_penelitian');
	}

	public function index()
	{
		$dataFasilitas=array(
			'dataFasilitas' => $this->model_fasilitas_penunjang_penelitian->data()
		);
		$this->load->view('fasilitas_penunjang_penelitian/view_main' , $dataFasilitas);
	}

	public function tambahData()
	{
		$data = array(
	        'nama_unit' 					=> $this->input->post('nama_unit'),
	        'no_sk_pendirian'			=> $this->input->post('no_sk'),
	        'fasilitas'	 				=> $this->input->post('fasilitas'),
	        'status_fasilitas_penunjang'	=> $this->input->post('status'),
	        'keterangan_invalid' 		=> $this->input->post('keterangan')
	    );
    		$this->model_fasilitas_penunjang_penelitian->addData($data);
    		$this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
   			redirect('penunjang-penelitian');
	}

	public function hapusData($id)
	{
        $this->model_fasilitas_penunjang_penelitian->deleteData($id);
        $this->session->set_flashdata('notif','<div class="alert alert-success bg-danger" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    	redirect('penunjang-penelitian'); 
    }

    public function editData($id)
    {
	   	$this->form_validation->set_rules('nama_unit', 'Nama Unit', 'required');
	    $this->form_validation->set_rules('no_sk_pendirian', 'No SK Pendirian', 'required');
	    $this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required');
	    $this->form_validation->set_rules('status_fasilitas_penunjang', 'Status Fasilitas Penunjang', 'required');
	    $this->form_validation->set_rules('keterangan_invalid', 'Keterangan Invalid');

	    if ($this->form_validation->run() == FALSE)
	    {
	      $data['penunjang'] = $this->model_fasilitas_penunjang_penelitian->findData($id);
	      $this->load->view('fasilitas_penunjang_penelitian/view_update', $data);
	    } else {
	        $data_fasilitas = array(
	            'nama_unit' 						=> $this->input->post('nama_unit'),
		        'no_sk_pendirian' 				=> $this->input->post('no_sk_pendirian'),
		        'fasilitas'	 					=> $this->input->post('fasilitas'),
		        'status_fasilitas_penunjang'		=> $this->input->post('status_fasilitas_penunjang'),
		        'keterangan_invalid' 			=> $this->input->post('keterangan_invalid')
	        );
	        $this->model_fasilitas_penunjang_penelitian->updateData($id, $data_fasilitas);
	        $this->session->set_flashdata('notif','<div class="alert alert-success bg-primary" role="alert"> Data Berhasil di Edit. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	        redirect('penunjang-penelitian');
	    }
    }
}
