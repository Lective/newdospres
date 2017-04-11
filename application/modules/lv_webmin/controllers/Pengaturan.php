<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

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
			'data' => $this->mcrud->pull('setting', array('id_setting' => 1))->row(),
			'alert' => $this->session->alert);
		$this->load->view('pengaturan/view_main', $data);
	}
	function process()
	{
		$data = $this->input->post('dt');
		$update = $this->mcrud->edit('setting', $data, array('id_setting' => 1));
		if ($update) {
			$this->session->set_flashdata('alert', responseEdit('success'));
		} else {
			$this->session->set_flashdata('alert', responseEdit('error'));
		}
		redirect('webmin/pengaturan');
	}
}
