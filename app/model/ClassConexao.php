<?php


namespace App\Model;


abstract class ClassConexao {
    protected function conexaoDB(){
        try {
            $conn=new \PDO("mysql:host=".HOST.";dbname=".DB,USER,PASS);
            return $conn;
        } catch (\PDOException $erro) {
            return $erro->getMessage();
        }
    }
}
