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
		$data = array(
			'data' => $this->mcrud->pull('view_seleksi_kaprodi')->result(),
			'alert' => $this->session->alert);
		$this->load->view('seleksi_kaprodi/view_main', $data);
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
}
