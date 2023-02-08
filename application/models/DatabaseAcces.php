<?php defined('BASEPATH') OR exit('No direct script access allowed');
class DatabaseAcces extends CI_Model {
    public function __construct(){
            $this->load->database();
    }

    public function getAllUserPost($idUser){
        $query= sprintf("select * from user_post where idUser!=%u",$idUser);
        $query_runner=$this->db->query($query);
        $data = array();
        foreach($query_runner->result_array()as $row){
            $data [] = $row;
        }
        return $data;
    }

    public function getAllEchange($idUser){
        $query= sprintf("select idEchange,u1.nom as user1,u2.nom as user2,idUser1,idUser2,p.paths as path1,p2.paths path2,idProduit1,idProduit2,o.nom nom1,o2.nom nom2,etat from echange
        join utilisateur u1 on idUser1 = u1.idUser
        join utilisateur u2 on idUser2 = u2.idUser
        join photo p on idProduit1 = p.idObjet
        join photo p2 on idProduit2 = p2.idObjet
        join objet o on o.idObjet = echange.idProduit1
        join objet o2 on o2.idObjet = echange.idProduit2
          where idUser2=%u and etat=0 group by idEchange",$idUser);
        $query_runner=$this->db->query($query);
        $data = array();
        foreach($query_runner->result_array()as $row){
            $data [] = $row;
        }
        return $data;
    }

    public function getAllPost($idUser){
        $query= sprintf("select photo.paths,o.nom,o.idUser,u.prenom,o.idObjet from photo
        join objet o on photo.idObjet = o.idObjet
        join utilisateur u on o.idUser = u.idUser
        where o.idUser=%u",$idUser);
        $query_runner=$this->db->query($query);
        $data = array();
        foreach($query_runner->result_array()as $row){
            $data [] = $row;
        }
        return $data;
    }

    public function initEchange($idSender,$idReceiver,$idObjet1,$idObjet2){
        $query =sprintf("insert into echange values(null,%u,%u,0,now(),%u,%u)",$idSender,$idReceiver,$idObjet1,$idObjet2);
        $this->db->query($query);
    }

    public function confirmEchange($idEchange,$idP1,$idP2,$user1,$user2){
        $query =sprintf("update echange set etat=10 where idEchange=%u",$idEchange);
        $this->reverseObject($idP1,$user2);
        $this->reverseObject($idP2,$user1);
        $this->db->query($query);
    }

    public function reverseObject($idObj,$new_user){
        $query =sprintf("update objet set idUser=%u where idObjet=%u",$new_user,$idObj);
        $this->db->query($query);
    }

    public function cancelEchange($idEchange){
        $query =sprintf("update echange set etat=-10 where idEchange=%u",$idEchange);
        $this->db->query($query);
    }

    public function insertPhoto($path,$idObjet){
        $query =sprintf("insert into  photo  values('%s',%u)",$path,$idObjet);
        $this->db->query($query);
    }

    public function insertObjet($idUser,$nom){
        $query =sprintf("insert into objet  values(null,%u,'%s') ",$idUser,$nom);
        $this->db->query($query);
    }

    public function inscription($email,$nom,$prenom,$date,$mdp){
        $query =sprintf("insert into utilisateur  values(null,'%s','%s','%s','%s','%s',0) ",$nom,$prenom,$email,$mdp,$date);
        $this->db->query($query);
    }

    public function getLastUser(){
        $query= sprintf("select * from utilisateur order by idUser DESC limit 1");
        $query_runner=$this->db->query($query);
        $data = array();
        foreach($query_runner->result_array()as $row){
            $data [] = $row;
        }
        return $data;
       
    }

    public function getAllUser(){
        $query= sprintf("select * from utilisateur ");
        $query_runner=$this->db->query($query);
        $data = array();
        foreach($query_runner->result_array()as $row){
            $data [] = $row;
        }
        return $data;
        
    }
}