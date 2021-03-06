<?php

namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\interfaceView;
use App\Model\ClassObra;
use App\Controller\Upload;
use App\Model\ClassCadastroArtista;


class ControllerObra extends ClassObra {
    
   /* public function __construct() {
        $this->setTitle("Pagina Inexistente");
        $this->setDescription("404");
        $this->setKeywords("");
        $this->setDir("404");
        $this->renderLayout();     
    }*/
    protected $foto;
    protected $nome;
    protected $entrega;
    protected $descricao;
    protected $tipo;    
    protected $artista;
    protected $qtd;
    protected $preco;
    protected $altura;
    protected $larguta;
    protected $estado=1;
    protected $id_artista;
    protected $id_categoria;
    protected $data_publicacao;


    public function add(){
        $render=new ClassRender();
        $render->setTitle("Adicionar Obra");
        $render->setDescription("");
        $render->setKeywords("");
        $render->setDir("obra");
        $render->renderLayout();
    }
    
    public function addObraArtista(){
        $render=new ClassRender();
        $render->setTitle("Adicionar Obra");
        $render->setDescription("");
        $render->setKeywords("");
        $render->setDir("obraArtista");
        $render->renderLayout();
    }

    public function all(){
        $render=new ClassRender();
        $render->setTitle("Lista de Obras");
        $render->setDescription("");
        $render->setKeywords("");
        $render->setDir("listaObras");
        $render->renderLayout();
    }
    
    public function allArtista(){
        $render=new ClassRender();
        $render->setTitle("Lista de Obras Pessoais");
        $render->setDescription("");
        $render->setKeywords("");
        $render->setDir("listaObraArtista");
        $render->renderLayout();
    }
    
    public function recVariaveis(){
        if(isset($_FILES['foto'])){
            $this->foto= $_FILES['foto'];
        } 
        if(isset($_POST['id_artista'])){
            $this->id_artista= filter_input(INPUT_POST, 'id_artista');
        }
        if(isset($_POST['id_categoria'])){
            $this->id_categoria= filter_input(INPUT_POST, 'id_categoria');
        }
        if(isset($_POST['nome'])){
            $this->nome= filter_input(INPUT_POST, 'nome');
        }
        if(isset($_POST['entrega'])){
            $this->entrega= filter_input(INPUT_POST, 'entrega');
        } 
        if(isset($_POST['descricao'])){
            $this->descricao= filter_input(INPUT_POST, 'descricao');
        }
        if(isset($_POST['tipo'])){
            $this->tipo= filter_input(INPUT_POST, 'tipo');
        } 
        if(isset($_POST['artista'])){
            $this->artista= filter_input(INPUT_POST, 'artista');
        }         
        if(isset($_POST['qtd'])){
            $this->qtd= filter_input(INPUT_POST, 'qtd');
        }
        if(isset($_POST['preco'])){
            $this->preco= filter_input(INPUT_POST, 'preco');
        }        
        if(isset($_POST['altura'])){
            $this->altura= filter_input(INPUT_POST, 'altura');
        }        
        if(isset($_POST['largura'])){
            $this->largura= filter_input(INPUT_POST, 'largura');
        }
    }
     
    public function registarObra(){
        require_once "ControllerFoto.php";
        $this->recVariaveis();
        $upload = new Upload($_FILES['foto'],DIRREQ."public/img/");
        $nomenovo=$upload->salvar();
        $this->id_artista=$_POST['id_artista'];
        parent::cadastroObra($nomenovo, $this->descricao, $this->preco, $this->estado, $this->qtd, $this->nome, $this->entrega, $this->altura, $this->largura, $this->id_categoria, date('d/M/y'), $this->id_artista);
        header("location:/nyenze/obra/all");
    }
    
    public function registarObraArtista(){
        require_once "ControllerFoto.php";
        session_start();
        $aux=new ClassCadastroArtista();
        $this->id_artista=$aux->isArtista($_SESSION['login'][0]['id']);
        $this->recVariaveis();
        $upload = new Upload($_FILES['foto'],DIRREQ."public/img/");
        $nomenovo=$upload->salvar();
        parent::cadastroObra($nomenovo, $this->descricao, $this->preco, $this->estado, $this->qtd, $this->nome, $this->entrega, $this->altura, $this->largura, $this->id_categoria, date('d/M/y'), $this->id_artista);
        header("location:/nyenze/obra/allArtista");
    }
    
    
    
    public function todasObras(){
        return parent::allObras();
    }
    
    public function isObras($categoria){
        return parent::SelectObras($categoria);
    }
    
}
