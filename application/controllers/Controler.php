<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controler extends CI_Controller {
    public function __construct(){
        session_start();
        if($_SESSION['user']==null){
            redirect('login_controller');
        }
    }
}