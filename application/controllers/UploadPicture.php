<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UploadPicture extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('databaseAcces');
		
	}
	public function index(){
        $this->load->view('upload');
    }

    public function addPicture(){
        $this->load->model('upload');
        $filesname = $this->upload->importImage();
        echo count($filesname);
    }
}
