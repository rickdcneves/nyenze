<?php



namespace App\Model;
use App\Model\ClassConexao;

class ClassUser extends ClassConexao {
    private $db;
   
    protected function cadastroUser($nome,$dnasc,$pass,$tipo,$idmorada,$idprovincia,$descricaolocalizacao,$genero){
       $id=0;
       //echo $nome,$dnasc,$pass,$tipo,$idmorada,$idprovincia,$descricaolocalizacao,$genero;
       
       $this->db=$this->conexaoDB()->prepare("INSERT INTO user(nome,genero,dnasc,pass,tipo,id_morada,id_provincia,descricaolocalizacao) VALUES (:nome, :genero, :dnasc, :pass, :tipo ,:idmorada ,:idprovincia ,:descricaolocalizacao)");
       $this->db->bindParam(":nome",$nome);
       $this->db->bindParam(":genero",$genero);
       $this->db->bindParam(":dnasc",$dnasc);
       $this->db->bindParam(":pass",$pass);
       $this->db->bindParam(":tipo",$tipo);
       $this->db->bindParam(":idmorada",$idmorada);
       $this->db->bindParam(":idprovincia",$idprovincia);
       $this->db->bindParam(":descricaolocalizacao",$descricaolocalizacao);
       
      $this->db->execute();
       
       
    }
    
    protected function lastUser(){
        $data = $this->db=$this->conexaoDB()->query("SELECT max(id) as ultimo FROM user")->fetchAll();
    
        foreach ($data as $row) {
            return $row['ultimo'];
        }
    }
   
}
