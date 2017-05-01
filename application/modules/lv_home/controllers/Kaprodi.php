<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Kaprodi extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    function detail($nidn)
    {
        $check = $this->mcrud->pull('calon_kaprodi_berprestasi', array('nidn' => $nidn, 'tahun' => date('Y')));
        if ($check->num_rows() > 0) {
            $data = array(
                'data' => $this->mcrud->pull('view_seleksi_kaprodi', array('nidn' => $nidn, 'tahun' => date('Y')))->row());
            $this->load->view('detail_cakaprodi/view_main', $data);
        } else {
            redirect('/');
        }
    }
}