<?php

namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\interfaceView;
use App\Model\ClassCategoria;


class ControllerCategoria extends ClassCategoria{
    
    protected $nome;


    public function add(){
        $render=new ClassRender();
        $render->setTitle("Adicionar Categoria");
        $render->setDescription("");
        $render->setKeywords("");
        $render->setDir("categoria");
        $render->renderLayout();
    }
    
    public function all(){
        $render=new ClassRender();
        $render->setTitle("Lista de Categorias");
        $render->setDescription("");
        $render->setKeywords("");
        $render->setDir("listaCategorias");
        $render->renderLayout();
    }
    
    public function recVariaveis(){
        if(isset($_POST['nome'])){
            $this->nome= filter_input(INPUT_POST, 'nome');
        }
    }

    public function cadastrar(){
        $this->recVariaveis();
        parent::cadastroCategoria($this->nome);
        header("location:/nyenze/categoria/all");
    }
    
    public function todasCategorias(){
        return parent::allCategoria();
    }
    

}
