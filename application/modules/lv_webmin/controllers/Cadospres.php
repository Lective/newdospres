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
		$data = array(
			'data' => $this->mcrud->pull('view_calon_dosen_berprestasi')->result(),
			'alert' => $this->session->alert);
		$this->load->view('cadospres/view_main', $data);
	}
	function add()
	{
		
	}
	function hapus($id)
	{
		
	}
}
