<?php
namespace App\Model;

class ClassCompra extends ClassConexao{
    private $db;
    
    protected function registarCompra($estado,$id_artista,$id_user,$id_obra,$data_venda,$data_estado,$qtd,$subtotal,$total,$lucro){
        $this->db= $this->conexaoDB()->prepare("insert venda obra (estado,id_artista,id_user,id_obra,data_venda,data_estado,qtd,subtotal,total,lucro) values(:estado,:id_artista,:id_user,:id_obra,:data_venda,:data_estado,:qtd,:subtotal,:total,:lucro)");
        $this->db->bindParam(":estado", $estado);
        $this->db->bindParam(":id_artista", $id_artista);
        $this->db->bindParam(":id_user", $id_user);
        $this->db->bindParam(":id_obra", $id_obra);
        $this->db->bindParam(":data_venda", $data_venda);
        $this->db->bindParam(":data_estado", $data_estado);
        $this->db->bindParam(":qtd", $qtd);
        $this->db->bindParam(":subtotal", $subtotal);
        $this->db->bindParam(":total", $total);
        $this->db->bindParam(":lucro", $lucro);        
        $this->db->execute();
    }
}
