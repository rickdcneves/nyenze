<?php

namespace App\Model;
use App\Model\ClassConexao;

class ClassCategoria extends ClassConexao {
    
    private $db;
    protected function cadastroCategoria($nome){
        $this->db= $this->conexaoDB()->prepare("insert into categoria (nome) values(:nome)");
        $this->db->bindParam(":nome", $nome);
        $this->db->execute();   
    }    
    
    
    public function allCategoria(){
        $data = $this->db=$this->conexaoDB()->query("SELECT * FROM categoria order by nome asc")->fetchAll();
        return $data;       
    }
    

   
}
