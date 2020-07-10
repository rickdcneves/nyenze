<?php

namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\interfaceView;
use App\Model\ClassMorada;
use App\Model\ClassContacto;

class ControllerMorada extends ClassMorada{
    
    
    /*protected $nome;
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
    protected $email;


    
    public function all(){
        $render=new ClassRender();
        $render->setTitle("Lista de Provincias");
        $render->setDescription("");
        $render->setKeywords("");
        $render->setDir("listaProvincias");
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
    }*/

    /*public function cadastrar(){
        $this->recVariaveis();

        parent::cadastroUser($this->nome, $this->dnasc,sha1($this->pass),$this->tipo, $this->id_morada, $this->id_municipio, $this->descricaolocalizacao, $this->genero);
        parent::cadastroArtista($this->sobre, $this->ibam, self::ultimo());
        $a=new ClassContacto();
        $a->cadastroContacto("email", $this->email,self::ultimo());
        $a->cadastroContacto("telefone", $this->numero,self::ultimo());
    }*/
    
    public function allmorada(){
        return parent::allMunicipios();
    }
    

}
