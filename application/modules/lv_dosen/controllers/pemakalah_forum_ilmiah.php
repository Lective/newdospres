<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemakalah_forum_ilmiah extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if (!$this->mauth->islogin()) {
			redirect('login');
		}
		if (!$this->mauth->permission(array('2', '4'))) die('you dont have permission to this page');
		$this->sess = $this->mauth->getSession();

		$this->load->model('model_pemakalah_forum_ilmiah');
	}
	public function index($nidn = 0)
	{
		$tahun = $this->input->get('tahun', true);
		if(empty($tahun)) $tahun = date('Y');
		$where = array('tahun' => $tahun);
		##################################
		$view = 'view_main_dppm';
		if ($this->sess['login_level'] == 4) {
			# jika yg login dosen, lakukan override
			$nidn = $this->sess['login_username'];
			$where['nidn'] = $nidn;
			$view = 'view_main_dosen';
		}
		###################################
		$res = $this->mcrud->pull('view_pemakalah_forum_ilmiah', $where);
		unset($where['tahun']);
		$dataBuku=array(
			'notif' => $this->session->notif,
			'selectTahun' => $tahun,
			'dataPemakalah' => $res->result(),
			'tahun_list' => $this->mcrud->pull_group('pemakalah_forum_ilmiah', $where, 'tahun')->result()
		);
		$this->load->view('pfi/'.$view, $dataBuku);
	}
	public function detail($id)
	{
		$load = $this->mcrud->pull('view_pemakalah_forum_ilmiah', array('id_pemakalah_forum_ilmiah' => $id));
		$data = array(
			'data' => $load->row(), );
		$this->load->view('pfi/view_detail', $data);
	}
	public function sync()
	{
		$res = $this->mcrud->pull_group('view_pemakalah_forum_ilmiah', array('dosen is null'), 'nidn');
		foreach ($res->result() as $d) {
    		$this->mdosen->createIfNull($d->nidn); 
		}
		redirect('forum-ilmiah');
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
	        'tahun' 						=> $this->input->post('tahun'),

	        'kd_sts_berkas_makalah' => $this->input->post('status_berkas')
    	);
		
		$this->mdosen->createIfNull($data['nidn']);

    	$config['upload_path'] 		= './private/uploads/forum-ilmiah/';
		$config['allowed_types'] 	= 'pdf';
		$config['max_size']			= '2000';

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file')){
			$upload_data = $this->upload->data();
			$data['file'] = $upload_data['file_name'];
		}
		$this->model_pemakalah_forum_ilmiah->addData($data);

		$this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
   		redirect('forum-ilmiah');
	}
	public function edit($id)
	{
		$data = $this->input->post('dt');
		$config['upload_path'] 		= './private/uploads/forum-ilmiah/';
		$config['allowed_types'] 	= 'pdf';
		$config['max_size']			= '2000';

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file')){
			$cek = $this->mcrud->pull_select('file', 'pemakalah_forum_ilmiah', array('id_pemakalah_forum_ilmiah' => $id))->row();
			if (is_file('./private/uploads/forum-ilmiah/'.$cek->file)) {
				unlink('./private/uploads/forum-ilmiah/'.$cek->file);
				sleep(1.5);
			}

			$upload_data = $this->upload->data();
			$data['file'] = $upload_data['file_name'];
		}
		$this->mcrud->edit('pemakalah_forum_ilmiah', $data, array('id_pemakalah_forum_ilmiah' => $id));
		$this->session->set_flashdata('notif','<div class="alert alert-success bg-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('forum-ilmiah/detail/'.$id);
	}
	public function remove($id)
	{
		$cek = $this->mcrud->pull_select('file', 'pemakalah_forum_ilmiah', array('id_pemakalah_forum_ilmiah' => $id))->row();
		if (is_file('./private/uploads/forum-ilmiah/'.$cek->file)) {
			unlink('./private/uploads/forum-ilmiah/'.$cek->file);
			sleep(1.5);
		}
		$this->mcrud->remove('pemakalah_forum_ilmiah', array('id_pemakalah_forum_ilmiah' => $id));
		$this->session->set_flashdata('notif','<div class="alert alert-success bg-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('forum-ilmiah');
	}
}
