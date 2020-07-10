<?php

namespace App\Model;
use App\Model\ClassConexao;

class ClassProvincia extends ClassConexao {
    public function allProvincias(){
        $data = $this->db=$this->conexaoDB()->query("SELECT * FROM provincia")->fetchAll();
        return $data;       
    }
    

   
}
