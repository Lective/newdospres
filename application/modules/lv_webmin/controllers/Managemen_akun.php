<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Managemen_akun extends CI_Controller {

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
			'data' => $this->mcrud->pull('user')->result(),
			'alert' => $this->session->alert);
		$this->load->view('managemen_akun/view_main', $data);
	}
	function tambah()
	{
		$data = $this->input->post('dt');
		$data['password'] = createPassword($data['password']);
		$insert = $this->mcrud->add('user', $data);
		if ($insert) {
			$this->session->set_flashdata('alert', responseAdd('success'));
		} else {
			$this->session->set_flashdata('alert', responseAdd('error'));
		}
		redirect('webmin/managemen-akun');
	}
	function hapus($id)
	{
		$remove  = $this->mcrud->remove('user', array('id_user' => $id));
		if ($remove) {
			$this->session->set_flashdata('alert', responseAdd('success'));
		} else {
			$this->session->set_flashdata('alert', responseAdd('error'));
		}
		redirect('webmin/managemen-akun');
	}
}
