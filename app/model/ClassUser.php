<?php



namespace App\Model;
use App\Model\ClassConexao;

class ClassUser extends ClassConexao {
    private $db;
   
    protected function cadastroUser($nome,$dnasc,$pass,$tipo,$idmorada,$idmunicipio,$descricaolocalizacao,$genero){
       $id=0;
       //echo $nome,$dnasc,$pass,$tipo,$idmorada,$idmunicipio,$descricaolocalizacao,$genero;
       
       $this->db=$this->conexaoDB()->prepare("INSERT INTO user(nome,genero,dnasc,pass,tipo,id_morada,id_municipio,descricaolocalizacao) VALUES (:nome, :genero, :dnasc, :pass, :tipo ,:idmorada ,:idmunicipio ,:descricaolocalizacao)");
       $this->db->bindParam(":nome",$nome);
       $this->db->bindParam(":genero",$genero);
       $this->db->bindParam(":dnasc",$dnasc);
       $this->db->bindParam(":pass",$pass);
       $this->db->bindParam(":tipo",$tipo);
       $this->db->bindParam(":idmorada",$idmorada);
       $this->db->bindParam(":idmunicipio",$idmunicipio);
       $this->db->bindParam(":descricaolocalizacao",$descricaolocalizacao);
       //var_dump($this->db);
       var_dump($this->db->execute());
       
    }
   
}
