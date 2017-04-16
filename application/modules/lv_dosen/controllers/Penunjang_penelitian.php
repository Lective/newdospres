<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penunjang_penelitian extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_fasilitas_penunjang_penelitian');
	}

	public function index()
	{	
		$res = $this->mcrud->pull('penunjang_penelitian');

		$data=array(
				'notif' => $this->session->notif,
				'data' => $res->result()
			);
		$this->load->view('penunjang_penelitian/view_main_dppm' , $data);
	}

	public function add()
	{
		$data = array(
	        'nama_unit' 					=> $this->input->post('nama_unit'),
	        'no_sk_pendirian'			=> $this->input->post('no_sk'),
	        'fasilitas'	 				=> $this->input->post('fasilitas'),
	        'status_penunjang'	=> $this->input->post('status'),
	        'keterangan_invalid' 		=> $this->input->post('keterangan')
	    );
		$this->mcrud->add('penunjang_penelitian', $data);
		$this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('penunjang-penelitian');
	}
	public function detail($id)
	{
		$load = $this->mcrud->pull('penunjang_penelitian', array('id_penunjang' => $id));
		$data = array(
			'data' => $load->row(), );
		$this->load->view('penunjang_penelitian/view_detail', $data);
	}
	public function edit($id)
	{
		$data = $this->input->post('dt');
		$this->mcrud->edit('penunjang_penelitian', $data, array('id_penunjang' => $id));
		$this->session->set_flashdata('notif','<div class="alert alert-success bg-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('penunjang-penelitian/detail/'.$id);
	}
	public function remove($id)
	{
		$this->mcrud->remove('penunjang_penelitian', array('id_penunjang' => $id));
		$this->session->set_flashdata('notif','<div class="alert alert-success bg-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('penunjang-penelitian');
	}
}
