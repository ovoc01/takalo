<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Model {
    public function __construct(){
            $this->load->database();
    }

    public function login($email,$mdp,$admin){
        $querytest = sprintf("select * from utilisateur where email='%s' and mdp = '%s' and admin =%u",$email,$mdp,$admin);
        $query = $this->db->query($querytest);
        $data = array();
        foreach($query->result_array()as $row){
            $data [] = $row;
        }
        return $data;
    }

}