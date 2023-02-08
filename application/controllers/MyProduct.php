<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyProduct extends CI_Controller {

	public function index(){		
        $this->load->model('databaseAcces');
		$p = $this->input->get('idObjet');
		$data = array();
        session_start();
        $data['myobjet'] = $this->databaseAcces->getAllPost($_SESSION['user']['idUser']);
		$data['isChange'] = ($p==NULL) ? false:true;
		$data['idProduct'] = $p;
		$data['idReceiver'] = $this->input->get('idUser');
		$this->load->view('product',$data);
	}		
}
