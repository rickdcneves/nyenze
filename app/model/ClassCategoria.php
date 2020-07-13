<?php

namespace App\Model;
use App\Model\ClassConexao;

class ClassCategoria extends ClassConexao {
    public function allCategoria(){
        $data = $this->db=$this->conexaoDB()->query("SELECT * FROM categoria order by nome asc")->fetchAll();
        return $data;       
    }
    

   
}
