<?php

namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\interfaceView;

class ControllerHome extends ClassRender implements interfaceView{
    
    public function __construct() {
        $this->setTitle("Home");
        $this->setDescription("Pagina Inicial");
        $this->setKeywords("Produzida para artistas");
        $this->setDir("home");
        $this->renderLayout();
        
    }
}
