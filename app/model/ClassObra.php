<?php

namespace App\Model;



class ClassObra {
    private $db;
    protected function cadastroObra($sobre,$ibam,$id_user){

        $this->db= $this->conexaoDB()->prepare("insert into artista (sobre,ibam,id_user) values(:sobre,:ibam,:id_user)");

        $this->db->bindParam(":sobre", $sobre);
        $this->db->bindParam(":ibam", $ibam);
        $this->db->bindParam(":id_user", $id_user);   
        $this->db->execute();

        
    }
    
    public function allObras(){
        $data = $this->db=$this->conexaoDB()->query("SELECT artista.*, user.*, morada.*,provincia.*,contacto.* FROM artista,user,morada,contacto,provincia where user.id=artista.id_user and contacto.id_user=user.id and user.id_morada=morada.id and user.id_provincia=provincia.id and contacto.tipo='email'")->fetchAll();
        return $data;       
    }

    
}
