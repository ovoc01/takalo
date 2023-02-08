<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddProduct extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('databaseAcces');
		
	}
	public function index(){
        $this->load->view('ajout');
	}	

    public function addProduct(){
        $this->load->model('databaseAcces');
        session_start();
        $name = $this->input->post('nom');
        $this->databaseAcces->insertObjet($this->databaseAcces->getAllUserPost($_SESSION['user']['idUser']),$name);
        redirect('uploadPicture');
    }
}
