<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function index(){
		$this->load->model('databaseAcces');
		$data = array();
		session_start();
		$data['picture']=$this->databaseAcces->getAllUserPost($_SESSION['user']['idUser']);		
		$this->load->view('accueil',$data);
	}		
}
