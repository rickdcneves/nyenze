<?php

namespace App\Model;
use App\Model\ClassConexao;

class ClassLucro extends ClassConexao {
    public function percentagem(){
        $data = $this->db=$this->conexaoDB()->query("SELECT def FROM lucro")->fetchAll();
    
        return $data[0]['def'];
        
    }
    

   
}
