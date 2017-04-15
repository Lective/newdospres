<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi_unggul extends CI_Controller {
		public function __construct()
	{
		parent::__construct();
		$this->load->model('model_unggul');
        $this->load->model('model_fakultas');
        $this->load->model('model_prodi');           
        $this->load->helper('url'); //You should autoload this one ;)
		$this->load->helper('ckeditor');
		    
	}

	public function index()
	{
		$data['data_unggul'] = $this->model_unggul->data();
		$this->load->view('prestasi_unggul/view_main', $data);
	}

	public function detail($id){        
		$data['data_unggul'] = $this->model_unggul->findData($id);
		$this->load->view('prestasi_unggul/Detail_view', $data);
	}
	public function hapusData($id)
	{
        $this->model_unggul->deleteData($id);
        $this->session->set_flashdata('notif','<div class="alert alert-success bg-danger" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    	redirect('webmin/kaprodi-berprestasi'); 
    }

    //public function tambahData()
	//{
		//$data = array(
	        //'nidn' 						=> $this->input->post('nidn'),
	        //'nama_lengkap' 				=> $this->input->post('nama_lengkap'),
	        //'jabatan_akademik'	 		=> $this->input->post('id_fakultas'),
	        //'pangkat_dan_golongan'		=> $this->input->post('id_program_studi'),
	        //'tempat_lahir' 				=> $this->input->post('tempat_lahir'),
	        //'tanggal_lahir' 			=> $this->input->post('tanggal_lahir'),
	        //'jenis_kelamin' 			=> $this->input->post('jenis_kelamin'),
	       // 'bidang_keahlian' 			=> $this->input->post('bidang_keahlian'),
	       // 'no_hp' 					=> $this->input->post('no_hp'),
	       // 'email' 					=> $this->input->post('email'),
	       // 'file_makalah' 				=> $this->input->post('file_makalah'),
	       // 'tahun' 					=> $this->input->post('tahun'),
	       // 'id_fakultas' 				=> $this->input->post('id_fakultas'),
	       // 'id_program_studi' 			=> $this->input->post('id_program_studi')
    	//);
    		//$this->model_unggul->addData($data);
    		//$this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" //data-/dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
   			//redirect('webmin/prestasi_unggul');
	//}
    
    public function insertAbstrak($id){
        $data_unggul = array(
            'abstrak' => $this->input->post('abstrak')
        );
        $this->model_unggul->updateData($id, $data_unggul);
        $this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Abstrak Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('webmin/prestasi-unggul/detail/'. $id);
    }
        public function insertLatarBelakang($id){
        $data_unggul = array(
            'latar_belakang' => $this->input->post('latar_belakang')
        );
        $this->model_unggul->updateData($id, $data_unggul);
        $this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Abstrak Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('webmin/prestasi-unggul/detail/'. $id);
    }
        public function insertMetodeCapaian($id){
        $data_unggul = array(
            'metode_pencapaian_unggulan' => $this->input->post('metode_pencapaian_unggulan')
        );
        $this->model_unggul->updateData($id, $data_unggul);
        $this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Abstrak Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('webmin/prestasi-unggul/detail/'. $id);
    }
    public function insertPrestasiUnggul($id){
        $data_unggul = array(
            'prestasi_yang_diunggulkan' => $this->input->post('prestasi_yang_diunggulkan')
        );
        $this->model_unggul->updateData($id, $data_unggul);
        $this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Abstrak Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('webmin/prestasi-unggul/detail/'. $id);
    }
    public function insertKemanfaatan($id){
        $data_unggul = array(
            'kemanfaatan' => $this->input->post('kemanfaatan')
        );
        $this->model_unggul->updateData($id, $data_unggul);
        $this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Abstrak Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('webmin/prestasi-unggul/detail/'. $id);
    }
    public function insertDiseminasi($id){
        $data_unggul = array(
            'diseminasi' => $this->input->post('diseminasi')
        );
        $this->model_unggul->updateData($id, $data_unggul);
        $this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Abstrak Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('webmin/prestasi-unggul/detail/'. $id);
    }
    public function insertPengakuan($id){
        $data_unggul = array(
            'pengakuan_pihak_terkait' => $this->input->post('pengakuan_pihak_terkait')
        );
        $this->model_unggul->updateData($id, $data_unggul);
        $this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Abstrak Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('webmin/prestasi-unggul/detail/'. $id);
    }
    public function insertCatatan($id){
        $data_unggul = array(
            'catatan' => $this->input->post('catatan')
        );
        $this->model_unggul->updateData($id, $data_unggul);
        $this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Abstrak Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('webmin/prestasi-unggul/detail/'. $id);
    }
    public function insertNilai($id){
        $data_nilai = array(
            'nilai_abstrak'                     => $this->input->post('nilai_abstrak'),
            'nilai_latar_belakang'              => $this->input->post('nilai_latar_belakang'),
            'nilai_metode_pencapaian_unggulan'  => $this->input->post('nilai_metode_pencapaian_unggulan'),
            'nilai_prestasi_yang_diunggulkan'   => $this->input->post('nilai_prestasi_yang_diunggulkan'),
            'nilai_kemanfaatan'                 => $this->input->post('nilai_kemanfaatan'),
            'nilai_diseminasi'                  => $this->input->post('nilai_diseminasi'),
            'nilai_pengakuan_pihak_terkait'     => $this->input->post('nilai_pengakuan_pihak_terkait'),
            'nilai_total'                       => $this->input->post('nilai_total')
        );
        $this->model_unggul->updateData($id, $data_nilai);
        $this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Abstrak Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('webmin/prestasi-unggul/detail/'.$id);
    }
    
    

}
