<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_ajar extends CI_Controller {
	private $sess;

	public function __construct()
	{
		parent::__construct();
		if (!$this->mauth->islogin()) {
			redirect('login');
		}
		if (!$this->mauth->permission(array('2', '4'))) die('you dont have permission to this page');
		$this->sess = $this->mauth->getSession();

		$this->load->model('model_buku_ajar');
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
		$res = $this->mcrud->pull('view_buku_ajar', $where);
		unset($where['tahun']);
		$dataBuku=array(
			'notif' => $this->session->notif,
			'selectTahun' => $tahun,
			'dataBuku' => $res->result(),
			'tahun_bk' => $this->mcrud->pull_group('buku_ajar', $where, 'tahun')->result()
		);
		$this->load->view('buku_ajar/'.$view, $dataBuku);
		
	}
	public function detail($id)
	{
		$load = $this->mcrud->pull('view_buku_ajar', array('id_buku_ajar' => $id));
		$data = array(
			'data' => $load->row(), );
		$this->load->view('buku_ajar/view_detail', $data);
	}
	public function sync()
	{
		$tahun = $this->input->get('tahun', true);
		if(empty($tahun)) $tahun = date('Y');
		$res = $this->mcrud->pull_group('view_buku_ajar', array('dosen is null', 'tahun' => $tahun), 'nidn');
		foreach ($res->result() as $d) {
    		$this->mdosen->createIfNull($d->nidn); 
		}
		redirect('buku-ajar?tahun='.$tahun);
	}
	public function add()
	{
		$data = array(
	        'nidn' 				=> $this->input->post('dosen'),
	        'judul' 				=> $this->input->post('judul'),
	        'isbn' 				=> $this->input->post('isbn'),
	        'penerbit'	 		=> $this->input->post('penerbit'),
	        'keterangan_invalid'	=> $this->input->post('keterangan'),
	        'jml_halaman' 		=> $this->input->post('jml_halaman'),
	        'tahun' 			=> $this->input->post('tahun')
    	);
    	
    	$this->mdosen->createIfNull($data['nidn']);

    	$config['upload_path'] 		= './private/uploads/buku-ajar/';
		$config['allowed_types'] 	= 'pdf';
		$config['max_size']			= '2000';

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file')){
			$upload_data = $this->upload->data();
			$data['file'] = $upload_data['file_name'];
		}
		
		$this->model_buku_ajar->addData($data);
		$this->session->set_flashdata('notif','<div class="alert alert-success bg-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('buku-ajar?tahun='.$data['tahun']);
	}
	public function edit($id)
	{
		$data = $this->input->post('dt');
		$config['upload_path'] 		= './private/uploads/buku-ajar/';
		$config['allowed_types'] 	= 'pdf';
		$config['max_size']			= '2000';

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file')){
			$cek = $this->mcrud->pull_select('file', 'buku_ajar', array('id_buku_ajar' => $id))->row();
			if (is_file('./private/uploads/buku-ajar/'.$cek->file)) {
				unlink('./private/uploads/buku-ajar/'.$cek->file);
				sleep(1.5);
			}

			$upload_data = $this->upload->data();
			$data['file'] = $upload_data['file_name'];
		}
		$this->mcrud->edit('buku_ajar', $data, array('id_buku_ajar' => $id));
		$this->session->set_flashdata('notif','<div class="alert alert-success bg-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('buku-ajar/detail/'.$id);
	}
	public function remove($id)
	{
		$cek = $this->mcrud->pull_select('file', 'buku_ajar', array('id_buku_ajar' => $id))->row();
		if (is_file('./private/uploads/buku-ajar/'.$cek->file)) {
			unlink('./private/uploads/buku-ajar/'.$cek->file);
			sleep(1.5);
		}
		$this->mcrud->remove('buku_ajar', array('id_buku_ajar' => $id));
		$this->session->set_flashdata('notif','<div class="alert alert-success bg-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('buku-ajar');
	}

}
