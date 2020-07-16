<?php

namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\interfaceView;

class ControllerHome extends ClassRender implements interfaceView{
    
    public function obracat() {
        $this->setTitle("Shop");
        $this->setDescription("Pagina Inicial");
        $this->setKeywords("Produzida para artistas");
        $this->setDir("home");
        $this->renderLayoutUser();
        
    }
    public function obras() {
        $this->setTitle("Shop");
        $this->setDescription("Pagina Inicial");
        $this->setKeywords("Produzida para artistas");
        $this->setDir("obra");
        $this->renderLayoutUser();
        
    }
    public function dashboard() {
        $this->setTitle("home");
        $this->setDescription("Pagina Inicial");
        $this->setKeywords("Produzida para artistas");
        $this->setDir("home");
        $this->renderLayout();
        
    }    
}
