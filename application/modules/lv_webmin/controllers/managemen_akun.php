<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Managemen_akun extends CI_Controller {

	public function index()
	{
		$this->load->view('managemen_akun/view_main');
	}
}
