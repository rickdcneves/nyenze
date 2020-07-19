<?php

namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\interfaceView;
use App\Model\ClassCompra;
use App\Model\ClassObra;
use App\Model\ClassLucro;

class ControllerCompra extends ClassCompra{
    protected $estado="Não Confirmado";
    protected $id_artista;
    protected $id_user;
    protected $id_obra;
    protected $data_venda;
    protected $data_estado;
    protected $qtd;
    protected $subtotal;
    protected $total;
    protected $lucro;
    
    public function recVariaveis(){
        if(isset($_POST['qtd'])){
            $this->qtd= filter_input(INPUT_POST, 'qtd');
        }
        $this->id_obra=base64_decode($_GET['obra']);
        $this->id_artista=base64_decode($_GET['art']);
        $this->data_estado=date('d/M/y');
        $this->data_venda=date('d/M/y');
        $this->id_user=$_SESSION['login'][0]['id'];
        
        $aux=new ClassObra();
        $auxLucro=new ClassLucro();
        
        $this->subtotal=($aux->isPreco($this->id_obra))*($this->qtd);
        $this->lucro=$this->subtotal*($auxLucro->percentagem()/100);
        $this->total=$this->subtotal+$this->lucro;
    }
    
    public function confirmar(){
        session_start();
        if(isset($_SESSION['login'])){
            $this->recVariaveis();
        }else{
            echo "<script>window.location.href='/nyenze/login/entrar?msg=". base64_encode("Antes de Efectuar Uma Compra Deve Fazer o Login")."'</script>";
        }
    }
}
