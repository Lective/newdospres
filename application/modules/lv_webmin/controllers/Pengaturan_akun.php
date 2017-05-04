<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan_akun extends CI_Controller {
	private $sess;

	public function __construct()
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
			'alert' => $this->session->alert,
			'data' => $this->mcrud->pull('user', array('id_user' => $this->sess['login_iduser']))->row());
		$this->load->view('pengaturan_akun/view_bkma', $data);
	}
	function save_password()
	{
		$p_ini = trim($this->input->post('pass_ini', true));
		$p_baru = trim($this->input->post('pass_baru', true));
		$u_p = trim($this->input->post('u_pass', true));

		if ($p_baru == $u_p) {
			$check = $this->mcrud->pull('user', array('id_user' => $this->sess['login_iduser']));
			if ($check->num_rows() > 0) {
				if (checkPassword($p_ini, $check->row()->password)) {
					$edit = $this->mcrud->edit('user', array('password' => createPassword($p_baru)), array('id_user' => $this->sess['login_iduser']));
					redirect('login');
				} else {
					$this->session->set_flashdata('alert', (object) array('status' => 'error', 'message' => 'Password Anda saat ini yang Anda masukkan tidak cocok'));
				}
			}
		} else {
			$this->session->set_flashdata('alert', (object) array('status' => 'error', 'message' => 'Password baru dan ulangi password tidak sama'));
		}
		redirect('webmin/pengaturan-akun');
	}
}
