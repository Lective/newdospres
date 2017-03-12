<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kaprodi extends CI_Controller {

	public function index()
	{
		$this->load->view('kaprodi/view_main');
	}
}
