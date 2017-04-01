<?php 

Class Lv_dashboard extends CI_Controller {

	private $sess;
	function __construct()
	{
		parent::__construct();
		if (!$this->mauth->islogin()) {
			redirect('login');
		}
		$this->sess = $this->mauth->getSession();
	}
	function index()
	{
		if ($this->sess['login_level'] == 1) {
			$this->load->view('view_dashboard_webmin');
		}
	}

}



?>