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
        $id=0;
        $this->db= $this->conexaoDB()->prepare("insert into user values(:id,:sobre,:ibam,:id_user)");
        $this->db->bindParam(":id", $id);
        $this->db->bindParam(":sobre", $sobre);
        $this->db->bindParam(":ibam", $ibam);
        $this->db->bindParam(":id_user", $id_user);   
        $this->db->execute();
    }

    
}
