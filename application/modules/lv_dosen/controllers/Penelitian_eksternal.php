<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penelitian_eksternal extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if (!$this->mauth->islogin()) {
			redirect('login');
		}
		if (!$this->mauth->permission(array('2'))) die('you dont have permission to this page');
		$this->sess = $this->mauth->getSession();

		$this->load->model('model_penelitian_hibah_ditlitabmas');
	}
	public function index($nidn = 0)
	{
		$tahun = $this->input->get('tahun', true);
		if(empty($tahun)) $tahun = date('Y');
		if(empty($nidn) && $nidn == 0){
			$res = $this->mcrud->pull('view_penelitian_eksternal', array('tahun' => $tahun));
			$dataBuku=array(
				'notif' => $this->session->notif,
				'selectTahun' => $tahun,
				'data' => $res->result(),
				'tahun_list' => $this->mcrud->pull_group('penelitian_eksternal', null, 'tahun')->result()
			);
			$this->load->view('penelitian_eksternal/view_main_dppm', $dataBuku);
		}
		else{
			$res = $this->mcrud->pull('penelitian_eksternal', array('nidn_ketua' => $nidn));
		}
	}

	public function add()
	{
		$data = array(
	        'nama_skim' 						=> $this->input->post('nama'),
	        'judul' 							=> $this->input->post('judul'),
	        'jumlah_dana'	 				=> $this->input->post('jumlah_dana'),
	        'nidn_ketua'					=> $this->input->post('ketua'),
	        'nama_anggota'					=> $this->input->post('nama_anggota'),
	        'bidang_penelitian'				=> $this->input->post('penelitian'),
	        'bidang_penelitian_lain' 		=> $this->input->post('penelitian_lain'),
	        'tujuan_sosial_ekonomi' 			=> $this->input->post('sosial_ekonomi'),
	        'tujuan_sosial_ekonomi_lain' 	=> $this->input->post('sosial_ekonomi_lain'),
	        'tahun' 						=> $this->input->post('tahun')
    	);
    	$this->mdosen->createIfNull($data['nidn_ketua']);

    	$config['upload_path'] 		= './private/uploads/penelitian-eksternal/';
		$config['allowed_types'] 	= 'pdf';
		$config['max_size']			= '2000';

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file')){
			$upload_data = $this->upload->data();
			$data['file'] = $upload_data['file_name'];
		}
		$this->mcrud->add('penelitian_eksternal',$data);
		$this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('penelitian-eksternal');
	}
	public function detail($id)
	{
		$load = $this->mcrud->pull('view_penelitian_eksternal', array('id_penelitian' => $id));
		$data = array(
			'data' => $load->row(), );
		$this->load->view('penelitian_eksternal/view_detail', $data);
	}
	public function sync()
	{
		$res = $this->mcrud->pull_group('view_penelitian_eksternal', array('dosen is null'), 'nidn_ketua');
		foreach ($res->result() as $d) {
    		$this->mdosen->createIfNull($d->nidn); 
		}
		redirect('penelitian-eksternal');
	}

}
