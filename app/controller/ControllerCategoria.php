<?php

namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\interfaceView;
use App\Model\ClassCategoria;


class ControllerCategoria extends ClassCategoria{
    
    protected $nome;


    /*public function add(){
        $render=new ClassRender();
        $render->setTitle("Adicionar Artista");
        $render->setDescription("");
        $render->setKeywords("");
        $render->setDir("artista");
        $render->renderLayout();
    }
    
    public function all(){
        $render=new ClassRender();
        $render->setTitle("Lista de Artistas");
        $render->setDescription("");
        $render->setKeywords("");
        $render->setDir("listaArtistas");
        $render->renderLayout();
    }*/
    
    public function recVariaveis(){
        if(isset($_POST['nome'])){
            $this->nome= filter_input(INPUT_POST, 'nome');
        }
    }

    public function cadastrar(){
        $this->recVariaveis();

        /*parent::cadastroUser($this->nome, $this->dnasc,sha1($this->pass),$this->tipo, $this->id_morada, $this->id_provincia, $this->descricaolocalizacao, $this->genero);
        parent::cadastroArtista($this->sobre, $this->ibam, self::ultimo());
        $a=new ClassContacto();
        $a->cadastroContacto("email", $this->email,self::ultimo());
        $a->cadastroContacto("telefone", $this->numero,self::ultimo());
        header("location:/nyenze/artista/all");*/
    }
    
    public function todasCategorias(){
        return parent::allCategoria();
    }
    

}
