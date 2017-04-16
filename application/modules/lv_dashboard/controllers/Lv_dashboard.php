<?php 

Class Lv_dashboard extends CI_Controller {

	private $sess;
	function __construct()
	{
		parent::__construct();
		if (!$this->mauth->islogin()) {
			redirect('login');
		}
		if (!$this->mauth->permission(array('1', '2', '3', '4', '5'))) die('you dont have permission to this page');
		$this->sess = $this->mauth->getSession();
	}
	function index()
	{
		if ($this->sess['login_level'] == 1) {
			$this->load->view('view_dashboard_webmin');
		} else if ($this->sess['login_level'] == 2) {
			$this->load->view('view_dashboard_dppm');
		} else if ($this->sess['login_level'] == 3) {
			$this->load->view('view_dashboard_hki');
		}
	}

}



?>