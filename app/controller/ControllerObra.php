<?php

namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\interfaceView;

class ControllerObra extends ClassRender implements interfaceView{
    
   /* public function __construct() {
        $this->setTitle("Pagina Inexistente");
        $this->setDescription("404");
        $this->setKeywords("");
        $this->setDir("404");
        $this->renderLayout();     
    }*/
    
    public function add(){
        $this->setTitle("Adicionar Obra");
        $this->setDescription("");
        $this->setKeywords("");
        $this->setDir("obra");
        $this->renderLayout();
    }
}
