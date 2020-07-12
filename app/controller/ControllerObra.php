<?php

namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\interfaceView;
use App\Model\ClassObra;
use App\Controller\Upload;


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

    
    public function add(){
        $render=new ClassRender();
        $render->setTitle("Adicionar Obra");
        $render->setDescription("");
        $render->setKeywords("");
        $render->setDir("obra");
        $render->renderLayout();
    }
    
    public function recVariaveis(){
        if(isset($_FILES['foto'])){
            $this->foto= $_FILES['foto'];
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
        if(isset($_POST['larguta'])){
            $this->larguta= filter_input(INPUT_POST, 'larguta');
        }        
    }
     
    public function registarObra(){
        include "ControllerFoto.php";
        $this->recVariaveis();
        $upload = new Upload($_FILES['foto'], 1000, 800, DIRREQ."public/img/");
        $upload->salvar();
        
        /*parent::cadastroUser($this->nome, $this->dnasc,sha1($this->pass),$this->tipo, $this->id_morada, $this->id_provincia, $this->descricaolocalizacao, $this->genero);
        parent::cadastroArtista($this->sobre, $this->ibam, self::ultimo());
        $a=new ClassContacto();
        $a->cadastroContacto("email", $this->email,self::ultimo());
        $a->cadastroContacto("telefone", $this->numero,self::ultimo());
        header("location:/nyenze/artista/all");*/
    }
    
    
    /*empty($_FILES['foto']))){
                $upload = new Upload($_FILES['foto'], 1000, 800, "fotos/");
                    echo $upload->salvar();*/
}
