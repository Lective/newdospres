<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function index()
	{
		$data = array(
			'alert' => $this->session->alert);
		$this->load->view('view_main', $data);
	}
	public function process()
	{
		$uname = $this->input->post('username');
		$upass = $this->input->post('password');
		if ($this->mauth->check_login($uname, $upass)) {
			redirect('dashboard');
		} else {
			$this->session->set_flashdata('alert', 'Gagal login, periksa username atau password Anda');
			redirect('login');
		}
	}
}