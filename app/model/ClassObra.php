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
        $data = $this->db=$this->conexaoDB()->query("SELECT lucro.def, obra.*, categoria.nome as catname, artista.id as artista_id,user.nome as usname FROM lucro,obra,categoria,artista,user WHERE obra.id_categoria=categoria.id and obra.id_artista=artista.id and artista.id_user=user.id")->fetchAll();
        return $data;       
    }
    public function SelectObras($categoria){
        $data = $this->db=$this->conexaoDB()->query("SELECT lucro.def, obra.*, categoria.nome as catname, artista.id as artista_id,user.nome as usname FROM lucro,obra,categoria,artista,user WHERE obra.id_categoria=categoria.id and obra.id_artista=artista.id and artista.id_user=user.id and categoria.id=".$categoria)->fetchAll();
        return $data;       
    }
    
    public function SelectObraId($id){
        $data = $this->db=$this->conexaoDB()->query("SELECT lucro.def, obra.*, categoria.nome as catname, artista.id as artista_id,user.nome as usname FROM lucro,obra,categoria,artista,user WHERE obra.id_categoria=categoria.id and obra.id_artista=artista.id and artista.id_user=user.id and obra.id=".$id)->fetchAll();
        return $data;       
    }
    
    public function SelectObraArtista($id_artista){
        $data = $this->db=$this->conexaoDB()->query("SELECT lucro.def, obra.*, categoria.nome as catname, artista.id as artista_id,user.nome as usname FROM lucro,obra,categoria,artista,user WHERE obra.id_categoria=categoria.id and obra.id_artista=artista.id and artista.id_user=user.id and obra.id_artista=".$id_artista)->fetchAll();
        return $data;       
    }
    
    public function isPreco($id){
        $data = $this->db=$this->conexaoDB()->query("SELECT obra.preco FROM obra WHERE obra.id=".$id)->fetchAll();
        foreach ($data as $row){
            return $row['preco'];
        }       
    }
    
    public function reduzirQtd($qtd,$id){
        //update obra set qtd=qtd+1 WHERE id=1
        
        $this->db= $this->conexaoDB()->prepare("update obra set qtd=qtd-:qtd WHERE id=:id");
        $this->db->bindParam(":id", $id);
        $this->db->bindParam(":qtd", $qtd);
        $this->db->execute();
    }
    
}
