<?php defined('BASEPATH') OR exit('No direct script access allowed');
class DatabaseAcces extends CI_Model {
    public function __construct(){
            $this->load->database();
    }

    public function getAllUserPost($idUser){
        $query= sprintf("select * from user_post where idUser=%u'",$idUser);
        $query_runner->db->query($query);
        $data = array();
        foreach($query_runner->result_array()as $row){
            $data [] = $row;
        }
        return $data;
    }
}