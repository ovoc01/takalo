<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Echange extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('databaseAcces');
		
	}
	public function index(){		
		$data = array();
        session_start();
        $data['echange'] = $this->databaseAcces->getAllEchange($_SESSION['user']['idUser']);
		$this->load->view('echange',$data);
	}
	
	public function changeObj(){
		session_start();
		$sender = $_SESSION['user']['idUser'];
		$receiver = $this->input->get('idReceiver');
		$idObjet1 = $this->input->get('idObjet1');
		$idObjet2 = $this->input->get('idObjet2');
		$this->databaseAcces->initEchange($sender,$receiver,$idObjet1,$idObjet2);
		redirect('accueil');
	}

	public function echange(){
		$idEchange = $this->input->get('idEchange');
		$idUser1 = $this->input->get('idU1');
		$idUser2 = $this->input->get('idU2');
		$idP1 = $this->input->get('idP1');
		$idP2 = $this->input->get('idP2');
		$this->databaseAcces->confirmEchange($idEchange,$idP1,$idP2,$idUser1,$idUser2);
		redirect("echange");
	}
}
