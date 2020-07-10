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
    
    public function allArtistas(){
        $data = $this->db=$this->conexaoDB()->query("SELECT artista.*, user.*, morada.*,provincia.*,contacto.* FROM artista,user,morada,contacto,provincia where user.id=artista.id_user and contacto.id_user=user.id and user.id_morada=morada.id and user.id_provincia=provincia.id and contacto.tipo='email'")->fetchAll();
        return $data;       
    }

    
}
