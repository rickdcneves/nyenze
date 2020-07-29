<?php

namespace App\Model;
use App\Model\ClassConexao;

class ClassLogin extends ClassConexao{
    
    protected function login($contacto,$pass){
        $data = $this->db=$this->conexaoDB()->query("SELECT contacto.contacto, user.* FROM contacto,user WHERE user.id=contacto.id_user and user.pass='".$pass."'and contacto.contacto='".$contacto."'")->fetchAll();
        return $data;  
    }
    protected function loginArtista($contacto,$pass){
        $data = $this->db=$this->conexaoDB()->query("SELECT contacto.contacto, user.*,artista.pseudonimo FROM contacto,user,artista WHERE user.id=contacto.id_user and user.pass='".$pass."'and contacto.contacto='".$contacto."'and artista.id_user=user.id")->fetchAll();
        return $data;  
    }    

}