<?php

namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\interfaceView;
use App\Model\ClassUser;
use App\Model\ClassContacto;

class ControllerAdmin extends ClassUser{
    
    protected $nome;
    protected $pass;
    protected $genero;
    protected $dnasc;
    protected $tipo="Admin";
    protected $id_morada;
    protected $descricaolocalizacao;
    protected $ibam;
    protected $sobre;
    protected $numero;
    protected $id_provincia;
    protected $email;


    public function add(){
        $render=new ClassRender();
        $render->setTitle("Adicionar Administrador");
        $render->setDescription("");
        $render->setKeywords("");
        $render->setDir("administrador");
        $render->renderLayout();
    }
    
    public function all(){
        $render=new ClassRender();
        $render->setTitle("Lista de Administradores");
        $render->setDescription("");
        $render->setKeywords("");
        $render->setDir("listaAdmins");
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
      
        if(isset($_POST['pass'])){
            $this->pass= filter_input(INPUT_POST, 'pass');
        }

        if(isset($_POST['municipio'])){
            $this->id_morada= filter_input(INPUT_POST, 'municipio');
        }
        if(isset($_POST['descricaolocalizacao'])){
            $this->descricaolocalizacao= filter_input(INPUT_POST, 'descricaolocalizacao');
        }
        
        if(isset($_POST['numero'])){
            $this->numero= filter_input(INPUT_POST, 'numero');
        }
        
        if(isset($_POST['provincia'])){
            $this->id_provincia= filter_input(INPUT_POST, 'provincia');
        }
        
        if(isset($_POST['pass'])){
            $this->pass= filter_input(INPUT_POST, 'pass');
        }
        if(isset($_POST['email'])){
            $this->email= filter_input(INPUT_POST, 'email');
        }
    }

    public function cadastrar(){
        $this->recVariaveis();

        parent::cadastroUser($this->nome, $this->dnasc,sha1($this->pass),$this->tipo, $this->id_morada, $this->id_provincia, $this->descricaolocalizacao, $this->genero);
        
        $a=new ClassContacto();
        $a->cadastroContacto("email", $this->email,self::ultimo());
        $a->cadastroContacto("telefone", $this->numero,self::ultimo());
        header("location:/nyenze/administrador/all");
    }
    
    public function ultimo(){
        return parent::lastUser();
    }
    
    public function allAdmins(){
        return parent::listAdmins();
        
    }
    

}
