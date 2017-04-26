<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadospres extends CI_Controller {

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
			'data' => $this->mcrud->pull('view_calon_dosen_berprestasi', array('tahun' => $tahun))->result(),
			'alert' => $this->session->alert,
			'selectTahun' => $tahun);
		$this->load->view('cadospres/view_main', $data);
	}
	function add()
	{
		$data = $this->input->post('dt');
		$check = $this->mcrud->pull('calon_dosen_berprestasi', $data)->num_rows();
		if ($check == 0) {
			$insert = $this->mcrud->add('calon_dosen_berprestasi', $data);
			$this->session->set_flashdata('alert', (object)array('status' => 'success', 'message' => 'Dosen telah berhasil didaftarkan pada tahun ini'));
		} else {
			$this->session->set_flashdata('alert', (object)array('status' => 'error', 'message' => 'Dosen telah didaftarkan pada tahun ini'));
		}
		redirect('webmin/cadospres');
	}
	function hapus($nidn)
	{
		$del = $this->mcrud->remove('calon_dosen_berprestasi', array('nidn' => $nidn));
		if ($del) {
			$this->session->set_flashdata('alert', (object)array('status' => 'success'));
		} else {
			$this->session->set_flashdata('alert', (object)array('status' => 'error'));

		}
		redirect('webmin/cadospres');
	}
}
