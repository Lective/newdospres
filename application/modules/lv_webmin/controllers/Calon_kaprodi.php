<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calon_kaprodi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('Calon_kaprodi/view_main');
	}
}
