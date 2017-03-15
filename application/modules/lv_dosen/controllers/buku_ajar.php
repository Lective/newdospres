<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_ajar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_buku_ajar');
	}

	public function index()
	{
		$dataBuku=array(
			'dataBuku' => $this->model_buku_ajar->data()
		);
		$this->load->view('buku_ajar/view_main', $dataBuku);
	}

	public function tambahData()
	{
		$data = array(
	        'judul' 				=> $this->input->post('judul'),
	        'isbn' 				=> $this->input->post('isbn'),
	        'penerbit'	 		=> $this->input->post('penerbit'),
	        'keterangan_invalid'	=> $this->input->post('keterangan'),
	        'jml_halaman' 		=> $this->input->post('jml_halaman'),
	        'tahun' 			=> $this->input->post('tahun')
    	);
    		$this->model_buku_ajar->addData($data);
    		$this->session->set_flashdata('notif','<div class="alert alert-success bg-primary" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
   			redirect('buku-ajar');
	}

	public function hapusData($id)
	{
        $this->model_buku_ajar->deleteData($id);
        $this->session->set_flashdata('notif','<div class="alert alert-success bg-danger" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
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
