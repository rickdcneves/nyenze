<?php

namespace App\Model;
use App\Model\ClassConexao;

class ClassMorada extends ClassConexao {
    private $db;
   
    /*public function cadastroContacto($tipo,$contacto,$id_user){
       
       $this->db=$this->conexaoDB()->prepare("INSERT INTO contacto(tipo,contacto,id_user) VALUES (:tipo, :contacto, :id_user)");
       $this->db->bindParam(":tipo",$tipo);
       $this->db->bindParam(":contacto",$contacto);
       $this->db->bindParam(":id_user",$id_user);
       $this->db->execute();
       
    }*/
    
    public function allMunicipios(){
        $data = $this->db=$this->conexaoDB()->query("SELECT * FROM morada")->fetchAll();
        return $data;       
    }
    
    public function searchMunicipios($id_provincia){
        $this->db=$this->conexaoDB()->prepare("SELECT * FROM morada where id_provincia=:id_provincia");
        $this->db->bindParam(":id_provincia",$id_provincia);
        $this->db->execute();
        $data1 = $this->db->fetchAll();
        return $data1;       
    }
    

   
}
