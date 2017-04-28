<?php 
/**
* muhammad andi al-rizki
* muhammad.andialrizki@gmail.com
* model dosen untuk helper penanganan proses dosen
*/
class Mdl_dosen extends CI_Model
{
	function createIfNull($nidn)
	{
		$check = $this->db->get_where('dosen', array('nidn' => $nidn))->num_rows();
		if ($check == 0) {
			$dosen = maa_getDosen($nidn);
			$dt = array(
				'nidn' => $nidn, 
				'nip' => $dosen->nip,
				'nama_lengkap' => $dosen->nama,
				// default password saat create dosen
				'password' => createPassword('UMM.1964'),
				'id_master' => $dosen->id);
			$this->mcrud->add('dosen', $dt);
			sleep(0.5);
		}
	}
}