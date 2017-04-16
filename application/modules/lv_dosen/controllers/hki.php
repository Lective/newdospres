<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hki extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if (!$this->mauth->islogin()) {
			redirect('login');
		}
		if (!$this->mauth->permission(array('3'))) die('you dont have permission to this page');
		$this->sess = $this->mauth->getSession();
		$this->load->model('model_hki');
	}

	public function index($nidn = 0)
	{
		$tahun = $this->input->get('tahun', true);
		if(empty($tahun)) $tahun = date('Y');
		if(empty($nidn) && $nidn == 0){
			$res = $this->mcrud->pull('view_hki', array('tahun' => $tahun));
			$dataBuku=array(
				'notif' => $this->session->notif,
				'selectTahun' => $tahun,
				'data' => $res->result(),
				'tahun_list' => $this->mcrud->pull_group('hki', null, 'tahun')->result()
			);
			$this->load->view('hki/view_main_hki', $dataBuku);
		}
		else{
			$res = $this->mcrud->pull('hki', array('nidn' => $nidn));
		}
	}

	public function add()
	{
		$data = array(
			'nidn' 				=> $this->input->post('dosen'),
			'judul_hki' 				=> $this->input->post('judul'),
	        'jenis_hki' 				=> $this->input->post('jenis'),
	        'no_pendaftaran' 		=> $this->input->post('no_pendaftaran'),
	        'status_hki'				=> $this->input->post('status'),
	        'no_hki' 				=> $this->input->post('no_hki'),
	        'keterangan_invalid'		=> $this->input->post('keterangan'),
	        'tahun' 				=> $this->input->post('tahun')
    	);
    	$this->mdosen->createIfNull($data['nidn']);

    	$config['upload_path'] 		= './private/uploads/hki/';
		$config['allowed_types'] 	= 'pdf';
		$config['max_size']			= '2000';

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file')){
			$upload_data = $this->upload->data();
			$data['file'] = $upload_data['file_name'];
		}
		$this->model_hki->addData($data);
		$this->session->set_flashdata('notif','<div class="alert alert-success bg-primary" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('hki');
	}
	public function detail($id)
	{
		$load = $this->mcrud->pull('view_hki', array('id_hki' => $id));
		$data = array(
			'data' => $load->row(), );
		$this->load->view('hki/view_detail', $data);
	}
	public function sync()
	{
		$res = $this->mcrud->pull_group('view_hki', array('dosen is null'), 'nidn');
		foreach ($res->result() as $d) {
    		$this->mdosen->createIfNull($d->nidn); 
		}
		redirect('hki');
	}
	public function edit($id)
	{
		$data = $this->input->post('dt');
		$config['upload_path'] 		= './private/uploads/hki/';
		$config['allowed_types'] 	= 'pdf';
		$config['max_size']			= '2000';

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file')){
			$cek = $this->mcrud->pull_select('file', 'hki', array('id_hki' => $id))->row();
			if (is_file('./private/uploads/hki/'.$cek->file)) {
				unlink('./private/uploads/hki/'.$cek->file);
				sleep(1.5);
			}

			$upload_data = $this->upload->data();
			$data['file'] = $upload_data['file_name'];
		}
		$this->mcrud->edit('hki', $data, array('id_hki' => $id));
		$this->session->set_flashdata('notif','<div class="alert alert-success bg-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('hki/detail/'.$id);
	}
	public function remove($id)
	{
		$cek = $this->mcrud->pull_select('file', 'hki', array('id_hki' => $id))->row();
		if (is_file('./private/uploads/hki/'.$cek->file)) {
			unlink('./private/uploads/hki/'.$cek->file);
			sleep(1.5);
		}
		$this->mcrud->remove('hki', array('id_hki' => $id));
		$this->session->set_flashdata('notif','<div class="alert alert-success bg-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('hki');
	}
}
