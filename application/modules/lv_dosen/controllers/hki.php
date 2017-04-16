<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hki extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_hki');
	}

	public function index($nidn = 0)
	{
		$tahun = $this->input->get('tahun', true);
		if(empty($tahun)) $tahun = date('Y');
		if(empty($nidn) && $nidn == 0){
			$res = $this->mcrud->pull('view_hki', array('tahun' => $tahun));
			$dataBuku=array(
				'notif' => $this->session->notif,
				'selectTahun' => $tahun,
				'data' => $res->result(),
				'tahun_list' => $this->mcrud->pull_group('hki', null, 'tahun')->result()
			);
			$this->load->view('hki/view_main_hki', $dataBuku);
		}
		else{
			$res = $this->mcrud->pull('hki', array('nidn' => $nidn));
		}
	}

	public function add()
	{
		$data = array(
			'nidn' 				=> $this->input->post('dosen'),
			'judul_hki' 				=> $this->input->post('judul'),
	        'jenis_hki' 				=> $this->input->post('jenis'),
	        'no_pendaftaran' 		=> $this->input->post('no_pendaftaran'),
	        'status_hki'				=> $this->input->post('status'),
	        'no_hki' 				=> $this->input->post('no_hki'),
	        'keterangan_invalid'		=> $this->input->post('keterangan'),
	        'tahun' 				=> $this->input->post('tahun')
    	);
    	$this->mdosen->createIfNull($data['nidn']);

    	$config['upload_path'] 		= './private/uploads/hki/';
		$config['allowed_types'] 	= 'pdf';
		$config['max_size']			= '2000';

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file')){
			$upload_data = $this->upload->data();
			$data['file'] = $upload_data['file_name'];
		}
		$this->model_hki->addData($data);
		$this->session->set_flashdata('notif','<div class="alert alert-success bg-primary" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('hki');
	}

	public function hapusData($id)
	{
        $this->model_hki->deleteData($id);
        $this->session->set_flashdata('notif','<div class="alert alert-success bg-danger" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    	redirect('hki'); 
    }

    public function editData($id)
    {
	   	$this->form_validation->set_rules('judul_hki', 'Judul HKI', 'required');
	    $this->form_validation->set_rules('jenis_hki', 'Jenis HKI', 'required');
	    $this->form_validation->set_rules('no_pendaftaran', 'No Pendaftaran', 'required');
	    $this->form_validation->set_rules('status_hki', 'Status HKI', 'required');
	    $this->form_validation->set_rules('no_hki', 'No. HKI', 'required|integer');
	    $this->form_validation->set_rules('keterangan_invalid', 'Keterangan Invalid', 'required');
	    $this->form_validation->set_rules('tahun', 'Tahun', 'integer');

	    if ($this->form_validation->run() == FALSE)
	    {
	      $data['hak'] = $this->model_hki->findData($id);
	      $this->load->view('hki/view_update', $data);
	    } else {
	        $dataHki = array(
	            'judul_hki' 				=> $this->input->post('judul_hki'),
		        'jenis_hki' 				=> $this->input->post('jenis_hki'),
		        'no_pendaftaran'		=> $this->input->post('no_pendaftaran'),
		        'status_hki'				=> $this->input->post('status_hki'),
		        'no_hki' 				=> $this->input->post('no_hki'),
		        'keterangan_invalid' 	=> $this->input->post('keterangan_invalid'),
		        'tahun' 				=> $this->input->post('tahun')
	        );
	        $this->model_hki->updateData($id, $dataHki);
	        $this->session->set_flashdata('notif','<div class="alert alert-success bg-success" role="alert"> Data Berhasil di Edit. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	        redirect('hki');
	    }
    }
}
