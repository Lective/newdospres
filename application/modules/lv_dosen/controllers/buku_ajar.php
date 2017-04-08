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
		if (!$this->mauth->permission(array('2'))) die('you dont have permission to this page');
		$this->sess = $this->mauth->getSession();

		$this->load->model('model_buku_ajar');
	}

	public function index($nidn = 0)
	{
		$tahun = $this->input->get('tahun', true);
		if(empty($tahun)) $tahun = date('Y');
		if(empty($nidn) && $nidn == 0){
			$res = $this->mcrud->pull('view_buku_ajar', array('tahun' => $tahun));
			$dataBuku=array(
				'notif' => $this->session->notif,
				'selectTahun' => $tahun,
				'dataBuku' => $res->result(),
				'tahun_bk' => $this->mcrud->pull_group('buku_ajar', null, 'tahun')->result()
			);
			$this->load->view('buku_ajar/view_main_dppm', $dataBuku);
		}
		else{
			$res = $this->mcrud->pull('buku_ajar', array('nidn' => $nidn));
		}
		
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
		$res = $this->mcrud->pull_group('view_buku_ajar', array('dosen is null'), 'nidn');
		foreach ($res->result() as $d) {
			$check = $this->mcrud->pull('dosen', array('nidn' => $d->nidn))->num_rows();
			if ($check == 0) {
				$dosen = maa_getDosen($d->nidn);
				$data = array(
					'nidn' => $d->nidn, 
					'nip' => $dosen->nip,
					'nama_lengkap' => $dosen->nama,
					'id_master' => $dosen->id);
				$this->mcrud->add('dosen', $data);
				sleep(0.5);
			}
		}
		redirect('buku-ajar');
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
    	$check = $this->mcrud->pull('dosen', array('nidn' => $data['nidn']))->num_rows();
		if ($check == 0) {
			$dosen = maa_getDosen($data['nidn']);
			$dt = array(
				'nidn' => $data['nidn'], 
				'nip' => $dosen->nip,
				'nama_lengkap' => $dosen->nama,
				'id_master' => $dosen->id);
			$this->mcrud->add('dosen', $dt);
			sleep(0.5);
		}
		$this->model_buku_ajar->addData($data);
		$this->session->set_flashdata('notif','<div class="alert alert-success bg-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('buku-ajar');
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
