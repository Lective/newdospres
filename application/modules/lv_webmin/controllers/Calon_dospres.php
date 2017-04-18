<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calon_dospres extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('Calon_dospres/view_main');
	}
}
