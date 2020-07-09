<?php

namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\interfaceView;

class Controller404 extends ClassRender implements interfaceView{
    
    public function __construct() {
        $this->setTitle("Pagina Inexistente");
        $this->setDescription("404");
        $this->setKeywords("");
        $this->setDir("404");
        $this->renderLayout();
        
    }
}
