<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model;

use App\Model\ClassUser;
include "ClassUser.php";

class ClassCadastroArtista extends ClassUser {
    private $db;
    protected function cadastroArtista($sobre,$ibam,$id_user){

        $this->db= $this->conexaoDB()->prepare("insert into artista (sobre,ibam,id_user) values(:sobre,:ibam,:id_user)");

        $this->db->bindParam(":sobre", $sobre);
        $this->db->bindParam(":ibam", $ibam);
        $this->db->bindParam(":id_user", $id_user);   
        $this->db->execute();

        
    }
    
    protected function cadastroinfoArtista($sobre,$ibam,$pseudonimo,$id_user){
        $this->db= $this->conexaoDB()->prepare("update artista set sobre=:sobre,ibam=:ibam,pseudonimo=:pseudonimo WHERE id_user=:id_user");
        $this->db->bindParam(":sobre", $sobre);
        $this->db->bindParam(":ibam", $ibam);
        $this->db->bindParam(":pseudonimo", $pseudonimo);
        $this->db->bindParam(":id_user", $id_user);   
        $this->db->execute();

        
    }
    
    public function allArtistas(){
        $data = $this->db=$this->conexaoDB()->query("SELECT artista.*, user.*, morada.*,provincia.*,contacto.* FROM artista,user,morada,contacto,provincia where user.id=artista.id_user and contacto.id_user=user.id and user.id_morada=morada.id and user.id_provincia=provincia.id and contacto.tipo='email' order by nome asc")->fetchAll();
        return $data;       
    }
    
    public function isArtista($id_user){
        $data = $this->db=$this->conexaoDB()->query("SELECT id FROM `artista` WHERE id_user=".$id_user)->fetchAll();
            foreach ($data as $row) {
                return $row['id'];
            }    
    }
    
    public function isUser($id_artista){//Retorna o id do user recebendo o id do artista
        $data = $this->db=$this->conexaoDB()->query("SELECT id_user FROM `artista` WHERE id=".$id_artista)->fetchAll();
            foreach ($data as $row) {
                return $row['id'];
            }    
    }
    
}
