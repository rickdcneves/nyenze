<?php

namespace App\Model;

use App\Model\ClassConexao;

class ClassObra extends ClassConexao{
    private $db;
    protected function cadastroObra($foto,$descricao,$preco,$estado,$qtd,$titulo,$entrega,$altura,$largura,$id_categoria,$data_publicacao,$id_artista){

        $this->db= $this->conexaoDB()->prepare("insert into obra (foto,descricao,preco,estado,qtd,titulo,entrega,altura,largura,id_categoria,data_publicacao,id_artista) values(:foto,:descricao,:preco,:estado,:qtd,:titulo,:entrega,:altura,:largura,:id_categoria,:data_publicacao,:id_artista)");
        $this->db->bindParam(":foto", $foto);
        $this->db->bindParam(":descricao", $descricao);
        $this->db->bindParam(":preco", $preco);
        $this->db->bindParam(":estado", $estado);
        $this->db->bindParam(":qtd", $qtd);
        $this->db->bindParam(":titulo", $titulo);
        $this->db->bindParam(":entrega", $entrega);
        $this->db->bindParam(":altura", $altura);
        $this->db->bindParam(":largura", $largura);
        $this->db->bindParam(":id_categoria", $id_categoria);
        $this->db->bindParam(":data_publicacao", $data_publicacao);
        $this->db->bindParam(":id_artista", $id_artista);        
        $this->db->execute();

        
    }
    
    public function allObras(){
        $data = $this->db=$this->conexaoDB()->query("SELECT artista.*, user.*, morada.*,provincia.*,contacto.* FROM artista,user,morada,contacto,provincia where user.id=artista.id_user and contacto.id_user=user.id and user.id_morada=morada.id and user.id_provincia=provincia.id and contacto.tipo='email'")->fetchAll();
        return $data;       
    }

    
}
