<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Lv_home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_cadospres');
        $this->load->model('Model_cakaprodi');
    }
    public function index()
    {
    	$data['cadospres'] = $this->Model_cadospres->data();
        $data['cakaprodi'] = $this->Model_cakaprodi->data();
        $this->load->view('view_home', $data);
    }
}
?>