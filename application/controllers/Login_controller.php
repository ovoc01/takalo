<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	public function index(){
	$this->load->view('loginform');
   }		

   public function check(){
      $this->load->model('login');
      $email = $this->input->post('email');
      $mdp = $this->input->post('mdp');
      $data = $this->login->login($email,$mdp);
      if(count($data)>0){
         session_start();
         $_SESSION['user'] = $data[0]['idUser'];
         //echo $data[0]['idUser'];
         redirect('accueil');
      }else{
        redirect('login_controller');
      }
   }
}
