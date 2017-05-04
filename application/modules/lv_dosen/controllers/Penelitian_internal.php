<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penelitian_internal extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if (!$this->mauth->islogin()) {
			redirect('login');
		}
		if (!$this->mauth->permission(array('2', '4'))) die('you dont have permission to this page');
		$this->sess = $this->mauth->getSession();

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
			$where['nidn_ketua'] = $nidn;
			$view = 'view_main_dosen';
		}
		###################################
		$res = $this->mcrud->pull('view_penelitian_internal', $where);
		unset($where['tahun']);
		$dataBuku=array(
			'notif' => $this->session->notif,
			'selectTahun' => $tahun,
			'data' => $res->result(),
			'tahun_list' => $this->mcrud->pull_group('penelitian_internal', $where, 'tahun')->result()
		);
		$this->load->view('penelitian_internal/'.$view, $dataBuku);
	}
	public function add()
	{
		$data = array(
	        'judul' 							=> $this->input->post('judul'),
	        'nidn_ketua' 					=> $this->input->post('ketua'),
	        'nama_anggota'	 				=> $this->input->post('nama_anggota'),
	        'sumber_dana'					=> $this->input->post('sumber_dana'),
	        'jenis_penelitian'				=> $this->input->post('jenis'),
	        'institusi_sumber_dana'			=> $this->input->post('institusi_sumber_dana'),
	        'bidang_penelitian' 				=> $this->input->post('penelitian'),
	        'bidang_penelitian_lain' 		=> $this->input->post('penelitian_lain'),
	        'tujuan_sosial_ekonomi' 			=> $this->input->post('sosial_ekonomi'),
	        'tujuan_sosial_ekonomi_lain' 	=> $this->input->post('sosial_ekonomi_lain'),
	        'jumlah_dana' 					=> $this->input->post('jml_dana'),
	        'keterangan_invalid'			 	=> $this->input->post('keterangan'),
	        'tahun' 						=> $this->input->post('tahun')
    	);
		$this->mdosen->createIfNull($data['nidn_ketua']);

    	$config['upload_path'] 		= './private/uploads/penelitian-internal/';
		$config['allowed_types'] 	= 'pdf';
		$config['max_size']			= '2000';

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file')){
			$upload_data = $this->upload->data();
			$data['file'] = $upload_data['file_name'];
		}
		$this->mcrud->add('penelitian_internal', $data);
		$this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
   			redirect('penelitian-internal?tahun='.$data['tahun']);
	}

	public function detail($id)
	{
		$load = $this->mcrud->pull('view_penelitian_internal', array('id_penelitian' => $id));
		$data = array(
			'data' => $load->row(), );
		$this->load->view('penelitian_internal/view_detail', $data);
	}
	public function sync()
	{
		$tahun = $this->input->get('tahun', true);
		if(empty($tahun)) $tahun = date('Y');
		$res = $this->mcrud->pull_group('view_penelitian_internal', array('dosen is null', 'tahun' => $tahun), 'nidn_ketua');
		foreach ($res->result() as $d) {
    		$this->mdosen->createIfNull($d->nidn_ketua); 
		}
		redirect('penelitian-internal?tahun='.$tahun);
	}
	public function edit($id)
	{
		$data = $this->input->post('dt');
		$config['upload_path'] 		= './private/uploads/forum-ilmiah/';
		$config['allowed_types'] 	= 'pdf';
		$config['max_size']			= '2000';

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file')){
			$cek = $this->mcrud->pull_select('file', 'penelitian_internal', array('id_penelitian' => $id))->row();
			if (is_file('./private/uploads/penelitian-internal/'.$cek->file)) {
				unlink('./private/uploads/penelitian-internal/'.$cek->file);
				sleep(1.5);
			}

			$upload_data = $this->upload->data();
			$data['file'] = $upload_data['file_name'];
		}
		$this->mcrud->edit('penelitian_internal', $data, array('id_penelitian' => $id));
		$this->session->set_flashdata('notif','<div class="alert alert-success bg-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('penelitian-internal/detail/'.$id);
	}
	public function remove($id)
	{
		$cek = $this->mcrud->pull_select('file', 'penelitian_internal', array('id_penelitian' => $id))->row();
		if (is_file('./private/uploads/penelitian-internal/'.$cek->file)) {
			unlink('./private/uploads/penelitian-internal/'.$cek->file);
			sleep(1.5);
		}
		$this->mcrud->remove('penelitian_internal', array('id_penelitian' => $id));
		$this->session->set_flashdata('notif','<div class="alert alert-success bg-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('penelitian-internal');
	}
}
