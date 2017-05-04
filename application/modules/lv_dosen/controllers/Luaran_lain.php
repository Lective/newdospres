<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Luaran_lain extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if (!$this->mauth->islogin()) {
			redirect('login');
		}
		if (!$this->mauth->permission(array('2', '4'))) die('you dont have permission to this page');
		$this->sess = $this->mauth->getSession();

		$this->load->model('model_luaran_lain');
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
		$res = $this->mcrud->pull('view_luaran_lain', $where);
		unset($where['tahun']);
		$dataBuku=array(
			'notif' => $this->session->notif,
			'selectTahun' => $tahun,
			'dataLuaran' => $res->result(),
			'tahun_list' => $this->mcrud->pull_group('luaran_lain', $where, 'tahun')->result()
		);
		$this->load->view('luaran_lain/'.$view, $dataBuku);
	}
	public function detail($id)
	{
		$load = $this->mcrud->pull('view_luaran_lain', array('id_luaran_lain' => $id));
		$data = array(
			'data' => $load->row(), );
		$this->load->view('luaran_lain/view_detail', $data);
	}
	public function sync()
	{
		$tahun = $this->input->get('tahun', true);
		if(empty($tahun)) $tahun = date('Y');
		$res = $this->mcrud->pull_group('view_luaran_lain', array('dosen is null', 'tahun' => $tahun), 'nidn');
		foreach ($res->result() as $d) {
    		$this->mdosen->createIfNull($d->nidn); 
		}
		redirect('luaran-lain?tahun='.$tahun);
	}
	public function add()
	{
		$data = array(
	        'nidn' 				=> $this->input->post('dosen'),
	        'judul_luaran' 			=> $this->input->post('judul'),
	        'jenis_luaran_lain' 		=> $this->input->post('jenis'),
	        'deskripsi'	 			=> $this->input->post('deskripsi'),
	        'keterangan_invalid'		=> $this->input->post('keterangan'),
	        'tahun' 				=> $this->input->post('tahun'),
	        'kd_sts_berkas_pendukung' => $this->input->post('status')
    	);
    	$this->mdosen->createIfNull($data['nidn']);

    	$config['upload_path'] 		= './private/uploads/luaran-lain/';
		$config['allowed_types'] 	= 'pdf';
		$config['max_size']			= '2000';

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file')){
			$upload_data = $this->upload->data();
			$data['file'] = $upload_data['file_name'];
		}
		$this->model_luaran_lain->addData($data);
		$this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
   			redirect('luaran-lain?tahun='.$data['tahun']);
	}
	public function edit($id)
	{
		$data = $this->input->post('dt');
		$config['upload_path'] 		= './private/uploads/luaran-lain/';
		$config['allowed_types'] 	= 'pdf';
		$config['max_size']			= '2000';

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file')){
			$cek = $this->mcrud->pull_select('file', 'luaran_lain', array('id_luaran_lain' => $id))->row();
			if (is_file('./private/uploads/luaran-lain/'.$cek->file)) {
				unlink('./private/uploads/luaran-lain/'.$cek->file);
				sleep(1.5);
			}

			$upload_data = $this->upload->data();
			$data['file'] = $upload_data['file_name'];
		}
		$this->mcrud->edit('luaran_lain', $data, array('id_luaran_lain' => $id));
		$this->session->set_flashdata('notif','<div class="alert alert-success bg-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('luaran-lain/detail/'.$id);
	}
	public function remove($id)
	{
		$cek = $this->mcrud->pull_select('file', 'luaran_lain', array('id_luaran_lain' => $id))->row();
		if (is_file('./private/uploads/luaran-lain/'.$cek->file)) {
			unlink('./private/uploads/luaran-lain/'.$cek->file);
			sleep(1.5);
		}
		$this->mcrud->remove('luaran_lain', array('id_luaran_lain' => $id));
		$this->session->set_flashdata('notif','<div class="alert alert-success bg-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('luaran-lain');
	}

}
