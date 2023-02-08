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
      $this->input->post('admin');
      $i = ($this->input->post('admin')==null) ? 0:1;     
      $data = $this->login->login($email,$mdp,$i);
      if(count($data)>0){
         session_start();
         $_SESSION['user'] = $data[0];
         if($i==0)redirect('accueil');
         else redirect('admin');
      }else{
        redirect('login_controller');
      }
   }
}
