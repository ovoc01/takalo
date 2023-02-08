<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('databaseAcces');
		
	}
    public function index(){
	$this->load->view('inscription');
   }		

   public function inscription(){
    $this->load->model('databaseAcces');
    $email =$this->input->post('email');
    $nom =  $this->input->post('nom');
    $prenom = $this->input->post('prenom');
    $date = $this->input->post('date');
    $mdp = $this->input->post('mdp');
    $this->databaseAcces->inscription($email,$nom,$prenom,$date,$mdp);
    session_start();
    $_SESSION['user'] =$this->databaseAcces->getLastUser()[0];
    redirect('accueil');
   
}
}
