<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seleksi_dosen extends CI_Controller {

	private $sess;
	function __construct()
	{
		parent::__construct();
		if (!$this->mauth->islogin()) {
			redirect('login');
		}
		if (!$this->mauth->permission(array('1'))) die('you dont have permission to this page');
		$this->sess = $this->mauth->getSession();
	}
	function index()
	{
		$tahun = $this->input->get('tahun', true);
		if(empty($tahun)) $tahun = date('Y');



		$saw = $this->saw($tahun);
		$data = array(
			'data' => $saw,
			'alert' => $this->session->alert,
			'selectTahun' => $tahun);
		$this->load->view('seleksi_dosen/view_main', $data);
	}
	function reg($nidn)
	{
		$check = $this->mcrud->pull('calon_dosen_berprestasi', array('nidn' => $nidn, 'tahun' => date('Y')))->num_rows();
		if ($check == 0) {
			$this->mdosen->createIfNull($nidn);
			$insert = $this->mcrud->add('calon_dosen_berprestasi', array('nidn' => $nidn, 'tahun' => date('Y')));
			$this->session->set_flashdata('alert', (object)array('status' => 'success', 'message' => 'Dosen telah berhasil didaftarkan pada tahun ini, silahkan cek menu calon dosen berprestasi'));
		} else {
			$this->session->set_flashdata('alert', (object)array('status' => 'error', 'message' => 'Dosen telah didaftarkan pada tahun ini'));
		}
		redirect('webmin/seleksi-dosen');
	}
	private function saw($tahun)
	{
	 	$data = array();
		//Buat array bobot { C1 = 35%; C2 = 25%; C3 = 25%; dan C4 = 15%.}
 		$bobot = array(
 			0.25, // Buku Ajar
 			0.20, // HKI
 			0.18, // Pemakalah
 			0.15, // Luaran Lain,
 			0.12, // Penelitian Eksternal
 			0.10, // Penelitian Internal
 			);
 		//Kita gunakan rumus (Normalisasi x bobot)
 		$getData = $this->db
 			->where(array(
 				'thn_buku' => $tahun,
				'thn_pen_eks' => $tahun,
				'thn_luaran' => $tahun,
				'thn_pemakalah' => $tahun,
				'thn_hki' => $tahun,
				'thm_pen_int' => $tahun))
 			->get('view_seleksi_dosen');
 		if($getData->num_rows() > 0){
	 		 //Cari Max atau min dari tiap kolom Matrik
			$max_buku = $this->db->select('max(jml_buku) as max_buku')->get_where('view_seleksi_dosen_buku', 
			 		array('tahun' => $tahun))->row()->max_buku;
		 	$max_pen_int = $this->db->select('max(jml_penelitian_int) as max_penelitian_int')->get_where('view_seleksi_dosen_penelitian_int', 
		 		array('tahun' => $tahun))->row()->max_penelitian_int;
		 	$max_pen_eks = $this->db->select('max(jml_penelitian_eks) as max_penelitian_eks')->get_where('view_seleksi_dosen_penelitian_eks', 
		 		array('tahun' => $tahun))->row()->max_penelitian_eks;
		 	$max_luaran = $this->db->select('max(jml_luaran) as max_luaran')->get_where('view_seleksi_dosen_luaran', 
		 		array('tahun' => $tahun))->row()->max_luaran;
		 	$max_hki = $this->db->select('max(jml_hki) as max_hki')->get_where('view_seleksi_dosen_hki', 
		 		array('tahun' => $tahun))->row()->max_hki;
		 	$max_pemakalah = $this->db->select('max(jml_pemakalah) as max_pemakalah')->get_where('view_seleksi_dosen_pemakalah', 
		 		array('tahun' => $tahun))->row()->max_pemakalah;

			foreach($getData->result() as $d) {
			 	$jml_buku = $this->db->select('jml_buku')->get_where('view_seleksi_dosen_buku', 
			 		array('nidn' => $d->nidn, 'tahun' => $tahun))->row()->jml_buku;
			 	$jml_pen_int = $this->db->select('jml_penelitian_int')->get_where('view_seleksi_dosen_penelitian_int', 
			 		array('nidn_ketua' => $d->nidn, 'tahun' => $tahun))->row()->jml_penelitian_int;
			 	$jml_pen_eks = $this->db->select('jml_penelitian_eks')->get_where('view_seleksi_dosen_penelitian_eks', 
			 		array('nidn_ketua' => $d->nidn, 'tahun' => $tahun))->row()->jml_penelitian_eks;
			 	$jml_luaran = $this->db->select('jml_luaran')->get_where('view_seleksi_dosen_luaran', 
			 		array('nidn' => $d->nidn, 'tahun' => $tahun))->row()->jml_luaran;
			 	$jml_hki = $this->db->select('jml_hki')->get_where('view_seleksi_dosen_hki', 
			 		array('nidn' => $d->nidn, 'tahun' => $tahun))->row()->jml_hki;
			 	$jml_pemakalah = $this->db->select('jml_pemakalah')->get_where('view_seleksi_dosen_pemakalah', 
			 		array('nidn' => $d->nidn, 'tahun' => $tahun))->row()->jml_pemakalah;
			 	// Buku Ajar
	 			// HKI
	 			// Pemakalah
	 			// Luaran Lain,
	 			// Penelitian Eksternal
	 			// Penelitian Internal
			 $jumlah= ($jml_buku)+($jml_hki)+($jml_pemakalah)+($jml_luaran)+($jml_pen_eks)+($jml_pen_int);
			 $poin= round(
				   (($jml_buku			/	$max_buku)*$bobot[0])		+
				   (($jml_hki			/	$max_hki)*$bobot[1])		+
				   (($jml_pemakalah		/	$max_pemakalah)*$bobot[2])	+
				   (($jml_luaran		/	$max_luaran)*$bobot[3])		+
				   (($jml_pen_eks 		/	$max_pen_eks)*$bobot[4])	+
				   (($jml_pen_int		/	$max_pen_int)*$bobot[5])
			   	,3);

			  $data[] = array(
			  		'nidn' => $d->nidn,
			  		'dosen'=>$d->dosen,
			  		'kinerja' => array(
			  			'jml_buku' => $jml_buku,
			  			'jml_hki' => $jml_hki,
			  			'jml_pemakalah' => $jml_pemakalah,
			  			'jml_luaran' => $jml_luaran,
			  			'jml_pen_eks' => $jml_pen_eks,
			  			'jml_pen_int' => $jml_pen_int),
			      	'jumlah'=>$jumlah,
			      	'poin'=>$poin);

			}
			 //mengurutkan data
		   	foreach ($data as $key => $isi) {
		    	$nama[$key]		=	$isi['dosen'];
		    	$jlh[$key]		=	$isi['jumlah'];
		    	$poin1[$key]	=	$isi['poin'];
		   	}
		   	array_multisort($poin1,SORT_DESC,$jlh,SORT_DESC,$data);
		}  
	   	return $data;
	}
}
