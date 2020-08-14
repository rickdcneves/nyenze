<?php
namespace App\Model;

class ClassCompra extends ClassConexao{
    private $db;
    
    protected function registarCompra($estado,$id_artista,$id_user,$id_obra,$data_venda,$data_estado,$qtd,$subtotal,$total,$lucro){
        $this->db= $this->conexaoDB()->prepare("insert into venda (estado,id_artista,id_user,id_obra,data_venda,data_estado,qtd,subtotal,total,lucro) values(:estado,:id_artista,:id_user,:id_obra,:data_venda,:data_estado,:qtd,:subtotal,:total,:lucro)");
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
    
    protected function comprasFeitasUser($id_user){
        $data = $this->db=$this->conexaoDB()->query("SELECT obra.foto,obra.preco,obra.titulo,obra.entrega,venda.estado,venda.total,venda.estado,venda.data_venda,venda.qtd,lucro.def FROM lucro,obra,venda WHERE obra.id=venda.id_obra and venda.id_user=".$id_user." order by venda.data_venda desc")->fetchAll();
        return $data;
    }
    
    public function ultimo(){
        $data = $this->db=$this->conexaoDB()->query("SELECT max(id) as ultimo from venda")->fetchAll();
            foreach ($data as $row) {
                return $row['ultimo'];
            }    
    }
   
    protected function allVendas(){
        $data = $this->db=$this->conexaoDB()->query("SELECT venda.*,contacto.contacto as emailartista, artista.ibam FROM contacto,venda,artista,user WHERE (venda.id_artista=artista.id and artista.id_user=user.id and user.id=contacto.id_user) AND contacto.tipo='email' ORDER BY venda.id DESC")->fetchAll();
        return $data;
    }
    protected function allVendasNConf(){
        $data = $this->db=$this->conexaoDB()->query("SELECT venda.*,contacto.contacto as emailartista, artista.ibam FROM contacto,venda,artista,user WHERE (venda.id_artista=artista.id and artista.id_user=user.id and user.id=contacto.id_user) AND contacto.tipo='email' AND venda.estado='Não Confirmado' ORDER BY venda.id ASC")->fetchAll();
        return $data;
    }  
    
    protected function mudarEstado($estado,$id){
        $this->db= $this->conexaoDB()->prepare("update venda set estado=:estado WHERE id=:id");
        $this->db->bindParam(":estado", $estado);
        $this->db->bindParam(":id", $id);
        $this->db->execute();  
    }
    
    public function isVenda($id){
        $data = $this->db=$this->conexaoDB()->query("SELECT venda.qtd, obra.preco, venda.total,venda.estado, venda.id as venda, obra.id as obra, obra.titulo FROM venda,obra WHERE venda.id_obra=obra.id and venda.id=".$id)->fetchAll();
        return $data;       
    }
}
