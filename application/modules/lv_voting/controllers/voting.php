<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voting extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		$this->load->model('model_kaprodi');
	}
	public function index()
	{
		$data_kaprodi=array(
			'data_kaprodi' => $this->model_kaprodi->data()
		);
		$this->load->view('view_voting', $data_kaprodi);
	}
}