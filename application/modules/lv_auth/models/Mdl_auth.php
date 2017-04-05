<?php 

Class Mdl_auth extends CI_Model {
	function check_login($uname, $upass)
	{
		$check = $this->mcrud->pull('user', array('username' => strtolower($uname)));
		if ($check->num_rows() > 0) {
			if (checkPassword($upass, $check->row()->password)) {
				$sess = array(
					'login_iduser' => $check->row()->id_user, 
					'login_username' => $check->row()->username,
					'login_fullname' => $check->row()->fullname,
					'login_level' => $check->row()->level,
					'login_is' => true);
				$this->session->set_userdata('sess_user', $sess);
				return true;
			} 
		}
		return false;
	}
	function getSession()
	{
		return $this->session->sess_user;
	}
	function islogin()
	{
		$sess = $this->getSession();
		if (!empty($sess) && $sess['login_is'] == true && !empty($sess['login_iduser']))
			return true;
		else
			return false;
	}
	function permission($data)
	{
		$sess = $this->session->userdata('sess_user');
		$return = false;
		if (!empty($sess) && $sess['login_is'] == true && !empty($sess['login_iduser'])) {
			foreach ($data as $arr) {
				if ($arr == $sess['login_level']) {
					$return = true;
				}
			}
		}
		return $return;
	}
}


 ?>