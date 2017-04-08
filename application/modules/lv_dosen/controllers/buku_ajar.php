<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_ajar extends CI_Controller {
	private $sess;

	public function __construct()
	{
		parent::__construct();
		if (!$this->mauth->islogin()) {
			redirect('login');
		}
		if (!$this->mauth->permission(array('2'))) die('you dont have permission to this page');
		$this->sess = $this->mauth->getSession();

		$this->load->model('model_buku_ajar');
	}

	public function index($nidn = 0)
	{
		$tahun = $this->input->get('tahun', true);
		if(empty($tahun)) $tahun = date('Y');
		if(empty($nidn) && $nidn == 0){
			$res = $this->mcrud->pull('view_buku_ajar', array('tahun' => $tahun));
			$dataBuku=array(
				'notif' => $this->session->notif,
				'selectTahun' => $tahun,
				'dataBuku' => $res->result(),
				'tahun_bk' => $this->mcrud->pull_group('buku_ajar', null, 'tahun')->result()
			);
			$this->load->view('buku_ajar/view_main_dppm', $dataBuku);
		}
		else{
			$res = $this->mcrud->pull('buku_ajar', array('nidn' => $nidn));
		}
		
	}
	public function detail($id)
	{
		$load = $this->mcrud->pull('view_buku_ajar', array('id_buku_ajar' => $id));
		$data = array(
			'data' => $load->row(), );
		$this->load->view('buku_ajar/view_detail', $data);
	}
	public function sync()
	{
		$res = $this->mcrud->pull_group('view_buku_ajar', array('dosen is null'), 'nidn');
		foreach ($res->result() as $d) {
			$check = $this->mcrud->pull('dosen', array('nidn' => $d->nidn))->num_rows();
			if ($check == 0) {
				$dosen = maa_getDosen($d->nidn);
				$data = array(
					'nidn' => $d->nidn, 
					'nip' => $dosen->nip,
					'nama_lengkap' => $dosen->nama,
					'id_master' => $dosen->id);
				$this->mcrud->add('dosen', $data);
				sleep(0.1);
			}
		}
		redirect('buku-ajar');
	}
	public function add()
	{
		$data = array(
	        'nidn' 				=> $this->input->post('dosen'),
	        'judul' 				=> $this->input->post('judul'),
	        'isbn' 				=> $this->input->post('isbn'),
	        'penerbit'	 		=> $this->input->post('penerbit'),
	        'keterangan_invalid'	=> $this->input->post('keterangan'),
	        'jml_halaman' 		=> $this->input->post('jml_halaman'),
	        'tahun' 			=> $this->input->post('tahun')
    	);
    		$this->model_buku_ajar->addData($data);
    		$this->session->set_flashdata('notif','<div class="alert alert-success bg-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
   			redirect('buku-ajar');
	}

	public function hapusData($id)
	{
        $this->model_buku_ajar->deleteData($id);
        $this->session->set_flashdata('notif','<div class="alert alert-success bg-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    	redirect('buku-ajar'); 
    }

    public function editData($id)
    {
	   	$this->form_validation->set_rules('judul', 'Judul', 'required');
	    $this->form_validation->set_rules('isbn', 'ISBN', 'required');
	    $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
	    $this->form_validation->set_rules('jml_halaman', 'Jumlah Halaman', 'required|integer');
	    $this->form_validation->set_rules('keterangan_invalid', 'Keterangan Invalid', 'required');
	    $this->form_validation->set_rules('tahun', 'Tahun', 'required|integer');

	    if ($this->form_validation->run() == FALSE)
	    {
	      $data['buku'] = $this->model_buku_ajar->findData($id);
	      $this->load->view('buku_ajar/view_update', $data);
	    } else {
	        $dataBuku = array(
	            'judul' 				=> $this->input->post('judul'),
		        'isbn' 				=> $this->input->post('isbn'),
		        'penerbit'	 		=> $this->input->post('penerbit'),
		        'keterangan_invalid'	=> $this->input->post('keterangan_invalid'),
		        'jml_halaman' 		=> $this->input->post('jml_halaman'),
		        'tahun' 			=> $this->input->post('tahun')
	        );
	        $this->model_buku_ajar->updateData($id, $dataBuku);
	        $this->session->set_flashdata('notif','<div class="alert alert-success bg-success" role="alert"> Data Berhasil di Edit. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	        redirect('buku-ajar');
	    }
    }

}
