<?php

namespace App\Model;
use App\Model\ClassConexao;

class ClassContacto extends ClassConexao {
    private $db;
   
    public function cadastroContacto($tipo,$contacto,$id_user){
       
       $this->db=$this->conexaoDB()->prepare("INSERT INTO contacto(tipo,contacto,id_user) VALUES (:tipo, :contacto, :id_user)");
       $this->db->bindParam(":tipo",$tipo);
       $this->db->bindParam(":contacto",$contacto);
       $this->db->bindParam(":id_user",$id_user);
       $this->db->execute();
       
    }
    

   
}
