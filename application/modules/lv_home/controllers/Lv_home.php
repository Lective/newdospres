<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Lv_home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_cadospres');
        $this->load->model('Model_cakaprodi');
        $this->load->model('Model_dospres_voting');
        $this->load->model('Model_kaprodi_voting');
        $this->load->model('Model_prodi');
        $this->load->model('Model_bukjar');
    }
    public function index()
    {
    	$data['cadospres'] = $this->Model_cadospres->data();
        $data['cakaprodi'] = $this->Model_cakaprodi->data();
        $this->load->view('view_home', $data);
    }

    public function getDospres($nidn){
        $data['votedospres'] = $this->Model_cadospres->get($nidn);
        $data['data_kaprodi'] = $this->Model_prodi->data();
        $this->load->view('view_modal_vote_dospres', $data);   
    }
    public function getKaprodi($nidn){
        $data['votekaprodi'] = $this->Model_cakaprodi->get($nidn);
        $data['data_kaprodi'] = $this->Model_prodi->data();
        $this->load->view('view_modal_vote_kaprodi', $data);   
    }
    public function getBukuajar($nidn){
        $data['buku_ajar'] = $this->Model_bukjar->detail($nidn);
        $this->load->view('view_modal_detail_dospres', $data);   
    }
    public function detailCadospres($nidn){
        $load = $this->mcrud->pull('dosen', array('nidn' => $nidn));

        $data = array(
            'notif' => $this->session->notif,
            'dosen' => $load->row(), 
            'bukjar' => $this->mcrud->pull('buku_ajar', array('nidn' => $nidn))->result(),
            'penx' => $this->mcrud->pull('penelitian_eksternal', array('nidn_ketua' => $nidn))->result(),
            'dataLuaran' => $this->mcrud->pull('luaran_lain', array('nidn' => $nidn))->result(),
            'dataPemakalah' => $this->mcrud->pull('pemakalah_forum_ilmiah', array('nidn' => $nidn))->result(),
            'datahki' => $this->mcrud->pull('hki', array('nidn' => $nidn))->result(),
        );
        $this->load->view('detail_cadospres/view_main', $data);
    }
    public function detailCakaprodi(){
        $this->load->view('detail_cakaprodi/view_main');
    }

    public function votedospres(){
        $nidn_vote = $this->input->post('nidn_vote');
        $tahun = $this->input->post('tahun');

        $cek = $this->mdosen->cekDos($nidn_vote);
        if ($cek == 0) {
            $this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"><h4> NIDN tidak terdaftar </h4> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('');
        } else{
            $cekvote = $this->mcrud->check('dosen_berprestasi', array('nidn_vote' => $nidn_vote, 'tahun' => $tahun));
            $nowtahun = date('Y');
            if (($cekvote == 0) && ($tahun == $nowtahun) ) {
                $data = array(
                    'nidn'                          => $this->input->post('nidn'),
                    'nilai'                         => $this->input->post('nilai'),
                    'nidn_vote'                     => $this->input->post('nidn_vote'),
                    'email_vote'                    => $this->input->post('email_vote'),
                    'tahun'                         => $this->input->post('tahun'),
                    'alasan'                        => $this->input->post('alasan'),
                    'id_program_studi'              => $this->input->post('id_program_studi'),
                );
                $this->Model_dospres_voting->addData($data);
                $this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"><h4> Voting Berhasil Ditambahkan </h4><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect('');
                } else {
               $this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"><h4>  NIDN telah Melakukan Voting Dosen Berprestasi </h4> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('');
            }
        }
    }
    public function votekaprodi(){
        $nidn_vote = $this->input->post('nidn_vote');
        $tahun = $this->input->post('tahun');

        $cek = $this->mdosen->cekDos($nidn_vote);
        if ($cek == 0) {
            $this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"><h4>  NIDN tidak terdaftar</h4> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('');
        } else{
            $cekvote = $this->mcrud->check('kaprodi_berprestasi', array('nidn_vote' => $nidn_vote, 'tahun' => $tahun));
            $nowtahun = date('Y');
            if (($cekvote == 0) && ($tahun == $nowtahun) ) {
                 $data = array(
                    'nidn'                          => $this->input->post('nidn'),
                    'nilai'                         => $this->input->post('nilai'),
                    'nidn_vote'                     => $this->input->post('nidn_vote'),
                    'email_vote'                    => $this->input->post('email_vote'),
                    'tahun'                         => $this->input->post('tahun'),
                    'alasan'                        => $this->input->post('alasan'),
                    'id_program_studi'              => $this->input->post('id_program_studi'),
                            );
                $this->Model_kaprodi_voting->addData($data);
                $this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"><h4>  Voting Berhasil Ditambahkan </h4> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('');
            } else {
               $this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"><h4>  NIDN telah Melakukan Voting Kaprodi Berprestasi </h4> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('');
            }

        }
    }
}
?>