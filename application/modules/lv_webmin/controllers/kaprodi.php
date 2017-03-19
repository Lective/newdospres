<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kaprodi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_kaprodi');
		$this->load->model('model_fakultas');
	}
	public function index()
	{
		$data['data_kaprodi'] = $this->model_kaprodi->data();
		$data['data_fakultas'] = $this->model_fakultas->data();
		$this->load->view('kaprodi/view_main', $data);
	}
	public function viewFak(){
		
		$this->load->view('kaprodi/view_main', $data);
	}
	public function tambahData()
	{
		$data = array(
	        'nidn' 						=> $this->input->post('nidn'),
	        'nama_lengkap' 				=> $this->input->post('nama_lengkap'),
	        'jabatan_akademik'	 		=> $this->input->post('jabatan_akademik'),
	        'pangkat_dan_golongan'		=> $this->input->post('pangkat_dan_golongan'),
	        'ttl' 						=> $this->input->post('ttl'),
	        'jenis_kelamin' 			=> $this->input->post('jenis_kelamin'),
	        'bidang_keahlian' 			=> $this->input->post('bidang_keahlian'),
	        'no_hp' 					=> $this->input->post('no_hp'),
	        'email' 					=> $this->input->post('email'),
	        'file_makalah' 				=> $this->input->post('file_makalah'),
	        'tahun' 					=> $this->input->post('tahun'),
	        'id_fakultas' 				=> $this->input->post('id_fakultas'),
	        'id_program_studi' 			=> $this->input->post('id_program_studi')
    	);
    		$this->model_kaprodi->addData($data);
    		$this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
   			redirect('webmin/kaprodi-berprestasi');
	}

	public function hapusData($id)
	{
        $this->model_kaprodi->deleteData($id);
        $this->session->set_flashdata('notif','<div class="alert alert-success bg-danger" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    	redirect('webmin/kaprodi-berprestasi'); 
    }

    public function updateData($id)
    {
	   	$this->form_validation->set_rules('nidn', 'NIDN', 'required');
	    $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
	    $this->form_validation->set_rules('jabatan_akademik', 'Jabatan Akademik', 'required');
	    $this->form_validation->set_rules('pangkat_dan_golongan', 'Pangkat dan Golongan', 'required');
	    $this->form_validation->set_rules('ttl', 'Tempat dan Tanggal Lahir', 'required');
	    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
	    $this->form_validation->set_rules('bidang_keahlian', 'Bidang Keahlian', 'required');
	    $this->form_validation->set_rules('no_hp', 'No HP', 'required');
	    $this->form_validation->set_rules('email', 'E-Mail', 'required');
	    //upload file makalah
	    $this->form_validation->set_rules('tahun', 'Tahun', 'integer');
		//$this->form_validation->set_rules('id_fakultas', 'Fakultas', 'required');
		//$this->form_validation->set_rules('id_program_studi', 'Program Studi', 'required');
	    if ($this->form_validation->run() == FALSE)
	    {
	      $data['kaprodi'] = $this->model_kaprodi->findData($id);
	      $data['data_fakultas'] = $this->model_fakultas->data();
	      $this->load->view('kaprodi/update', $data);
	    } else {
	        $data_kaprodi = array(
	        'nidn' 						=> $this->input->post('nidn'),
	        'nama_lengkap' 				=> $this->input->post('nama_lengkap'),
	        'jabatan_akademik'	 		=> $this->input->post('jabatan_akademik'),
	        'pangkat_dan_golongan'		=> $this->input->post('pangkat_dan_golongan'),
	        'ttl' 						=> $this->input->post('ttl'),
	        'jenis_kelamin' 			=> $this->input->post('jenis_kelamin'),
	        'bidang_keahlian' 			=> $this->input->post('bidang_keahlian'),
	        'no_hp' 					=> $this->input->post('no_hp'),
	        'email' 					=> $this->input->post('email'),
	        'file_makalah' 				=> $this->input->post('file_makalah'),
	        'tahun' 					=> $this->input->post('tahun'),
	        'id_fakultas' 				=> $this->input->post('id_fakultas'),
	        'id_program_studi' 			=> $this->input->post('id_program_studi')
	        );
	        $this->model_kaprodi->updateData($id, $data_kaprodi);
	        $this->session->set_flashdata('notif','<div class="alert alert-success bg-primary" role="alert"> Data Berhasil di Update. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	        redirect('webmin/kaprodi-berprestasi');
	    }
	}
}
