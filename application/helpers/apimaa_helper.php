<?php

	function api_url($url = '')
	{
		return 'http://localhost/simutu_api/'.$url;
	}
	function maa_getDosen($nidn)
	{
		$data = file_get_contents(api_url('dosen/'.$nidn));
		$row = json_decode($data);
		return $row->data;
	}
?>