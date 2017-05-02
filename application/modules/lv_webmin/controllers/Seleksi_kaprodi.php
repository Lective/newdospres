<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seleksi_kaprodi extends CI_Controller {

	private $sess;
	function __construct()
	{
		parent::__construct();
		if (!$this->mauth->islogin()) {
			redirect('login');
		}
		if (!$this->mauth->permission(array('1'))) die('you dont have permission to this page');
		$this->sess = $this->mauth->getSession();
	}
	function index()
	{
		$tahun = $this->input->get('tahun');
		if(empty($tahun)) $tahun = date('Y');
		$data = array(
			'data' => $this->mcrud->pull('view_seleksi_kaprodi')->result(),
			'fk'	=> $this->mcrud->pull('fakultas')->result(),
			'prodi' => $this->mcrud->pull('program_studi')->result(),
			'listTahun' => $this->mcrud->pull_group('formulir_kaprodi', null, 'tahun')->result(),
			'selectTahun' => $tahun,
			'alert' => $this->session->alert);
		$this->load->view('seleksi_kaprodi/view_main', $data);
	}
	function detail($id)
	{
		$data = array(
			'alert' => $this->session->alert,
			'fk'	=> $this->mcrud->pull('fakultas')->result(),
			'prodi' => $this->mcrud->pull('program_studi')->result(),
			'data' => $this->mcrud->pull('view_seleksi_kaprodi', array('id_formulir_kaprodi' => $id))->row());
		$this->load->view('seleksi_kaprodi/view_detail', $data);
	}
	function add()
	{
		$data = $this->input->post('dt');
		$data['nidn'] = $this->input->post('nidn');

		$config['upload_path'] 		= './private/uploads/formulir-kaprodi/';
		$config['allowed_types'] 	= 'pdf';
		$config['max_size']			= '5000';

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file')){
			$upload_data = $this->upload->data();
			$data['file_makalah'] = $upload_data['file_name'];
			$this->mdosen->createIfNull($data['nidn']);
			$add = $this->mcrud->add('formulir_kaprodi', $data);
			$this->session->set_flashdata('alert', (object)array('status' => 'success', 'message' => 'Menambahkan calon kaprodi berprestasi'));
		} else {
			$this->session->set_flashdata('alert', (object)array('status' => 'error', 'message' => 'File makalah belum terupload, silakan coba lagi'));
		}
		redirect('webmin/seleksi-kaprodi');
	}
	function edit($id)
	{
		$data = $this->input->post('dt');
		
		$config['upload_path'] 		= './private/uploads/formulir-kaprodi/';
		$config['allowed_types'] 	= 'pdf';
		$config['max_size']			= '5000';

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file')){

			$cek = $this->mcrud->pull_select('file_makalah', 'formulir_kaprodi', array('id_formulir_kaprodi' => $id))->row();
			if (is_file('./private/uploads/formulir-kaprodi/'.$cek->file_makalah)) {
				unlink('./private/uploads/formulir-kaprodi/'.$cek->file_makalah);
				sleep(1.5);
			}

			$upload_data = $this->upload->data();
			$data['file_makalah'] = $upload_data['file_name'];	
		}
		$add = $this->mcrud->edit('formulir_kaprodi', $data, array('id_formulir_kaprodi' => $id));
		$this->session->set_flashdata('alert', (object)array('status' => 'success', 'message' => 'Mengubah data calon kaprodi berprestasi'));
		redirect('webmin/seleksi-kaprodi/detail/'.$id);
	}
	function reg($nidn)
	{
		$check = $this->mcrud->pull('calon_kaprodi_berprestasi', array('nidn' => $nidn, 'tahun' => date('Y')))->num_rows();
		if ($check == 0) {
			$insert = $this->mcrud->add('calon_kaprodi_berprestasi', array('nidn' => $nidn, 'tahun' => date('Y')));
			$this->session->set_flashdata('alert', (object)array('status' => 'success', 'message' => 'Ketua Program Studi telah berhasil didaftarkan pada tahun ini, silahkan cek menu calon Ketua Program Studi Berprestasi'));
		} else {
			$this->session->set_flashdata('alert', (object)array('status' => 'error', 'message' => 'Ketua Program Studi telah didaftarkan pada tahun ini'));
		}
		redirect('webmin/seleksi-kaprodi');
	}
	function remove($id)
	{
		$cek_d = $this->mcrud->pull_select('file_makalah, nidn, tahun', 'formulir_kaprodi', array('id_formulir_kaprodi' => $id));
		if($cek_d->num_rows() > 0){
			$cek = $cek_d->row();
			if (is_file('./private/uploads/formulir-kaprodi/'.$cek->file_makalah)) {
				unlink('./private/uploads/formulir-kaprodi/'.$cek->file_makalah);
				sleep(1.5);
			}
			$remove = $this->mcrud->remove('formulir_kaprodi', array('id_formulir_kaprodi' => $id));
			$remove_c = $this->mcrud->remove('calon_kaprodi_berprestasi', array('nidn' => $cek->nidn, 'tahun' => $cek->tahun));
			$this->session->set_flashdata('alert', (object)array('status' => 'success', 'message' => 'Data telah terhapus'));
		} else {
			$this->session->set_flashdata('alert', (object)array('status' => 'error', 'message' => 'Gagal menghapus data'));
		}
		redirect('webmin/seleksi-kaprodi');
	}
}
