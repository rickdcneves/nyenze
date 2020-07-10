<?php

namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\interfaceView;
use App\Model\ClassCadastroArtista;
use App\Model\ClassUser;

class ControllerArtista extends ClassCadastroArtista{
    
    protected $nome;
    protected $pass;
    protected $genero;
    protected $dnasc;
    protected $tipo="artista";
    protected $id_morada;
    protected $descricaolocalizacao;
    protected $ibam;
    protected $sobre;
    protected $numero;
    protected $id_municipio;


    public function add(){
        $render=new ClassRender();
        $render->setTitle("Adicionar Artista");
        $render->setDescription("");
        $render->setKeywords("");
        $render->setDir("artista");
        $render->renderLayout();
    }
    
    public function recVariaveis(){
        if(isset($_POST['nome'])){
            $this->nome= filter_input(INPUT_POST, 'nome');
        }
        if(isset($_POST['genero'])){
            $this->genero= filter_input(INPUT_POST, 'genero');
        }
        if(isset($_POST['dnasc'])){
            $this->dnasc= filter_input(INPUT_POST, 'dnasc');
        }
        if(isset($_POST['sobre'])){
            $this->sobre= filter_input(INPUT_POST, 'sobre');
        }
        if(isset($_POST['ibam'])){
            $this->ibam= filter_input(INPUT_POST, 'ibam');
        }        
        if(isset($_POST['pass'])){
            $this->pass= filter_input(INPUT_POST, 'pass');
        }

        if(isset($_POST['provincia'])){
            $this->id_morada= filter_input(INPUT_POST, 'provincia');
        }
        if(isset($_POST['descricaolocalizacao'])){
            $this->descricaolocalizacao= filter_input(INPUT_POST, 'descricaolocalizacao');
        }
        
        if(isset($_POST['numero'])){
            $this->numero= filter_input(INPUT_POST, 'numero');
        }
        
        if(isset($_POST['municipio'])){
            $this->id_municipio= filter_input(INPUT_POST, 'municipio');
        }
        
        if(isset($_POST['pass'])){
            $this->pass= filter_input(INPUT_POST, 'pass');
        }
        if(isset($_POST['email'])){
            $this->email= filter_input(INPUT_POST, 'email');
        }
        //echo $this->dnasc."\n".$this->pass."\n".$this->tipo."\n".$this->id_morada."\n".$this->id_municipio."\n".$this->descricaolocalizacao."\n".$this->genero;
    }

    public function cadastrar(){
        $this->recVariaveis();
       // exit();
        parent::cadastroUser($this->nome, $this->dnasc,$this->pass,$this->tipo, $this->id_morada, $this->id_municipio, $this->descricaolocalizacao, $this->genero);
       // parent::cadastroArtista($this->sobre, $this->ibam, 2);
        
               
    }
}
