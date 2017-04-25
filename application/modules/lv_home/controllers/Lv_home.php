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
    public function detailCadospres(){
        $this->load->view('detail_cadospres/view_main');
    }
    public function detailCakaprodi(){
        $this->load->view('detail_cakaprodi/view_main');
    }

    public function votedospres(){
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
        $this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Voting Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('');
    }
    public function votekaprodi(){
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
        $this->session->set_flashdata('notif','<div class="alert alert-success bg-info" role="alert"> Voting Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('');
    }
}
?>