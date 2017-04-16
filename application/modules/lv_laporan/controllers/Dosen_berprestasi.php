<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_berprestasi extends CI_Controller {

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
		$tahun = $this->input->get('tahun', true);
		if(empty($tahun)) $tahun = date('Y');
		$data = array(
			'data' => $this->mcrud->pull('view_laporan_dosen',  array('tahun' => $tahun))->result(),
			'selectTahun' => $tahun,
			'tahun_list' => $this->db->select('tahun')->group_by('tahun')->get_where('view_laporan_dosen')->result(),
			'alert' => $this->session->alert);
		$this->load->view('laporan_dosen/view_main', $data);
	}
	function detail($nidn)
	{
		$tahun = $this->input->get('tahun', true);
		if(empty($tahun)) $tahun = date('Y');
		$data = array(
			'data' => $this->mcrud->pull('view_laporan_dosen_detail', array('nidn' => $nidn, 'tahun' => $tahun))->result(),
			'selectTahun' => $tahun,
			'alert' => $this->session->alert);
		$this->load->view('laporan_dosen/view_detail', $data);
	}

}
