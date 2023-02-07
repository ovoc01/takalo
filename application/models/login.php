<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Model {
    public function __construct(){
            $this->load->database();
    }

    public function login($email,$mdp){
        $querytest = sprintf("select * from utilisateur where email='%s' and mdp = '%s'",$email,$mdp);
        $query = $this->db->query($querytest);
        $data = array();
        foreach($query->result_array()as $row){
            $data [] = $row;
        }
        return $data;
    }
}