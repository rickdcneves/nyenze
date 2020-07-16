<?php

namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\interfaceView;
use App\Model\ClassObra;

class ControllerLogin extends ClassObra{
    

    public function entrar() {
        $render=new ClassRender();
        $render->setTitle("Login");
        $render->setDescription("Pagina Inicial");
        $render->setKeywords("Produzida para artistas");
        $render->setDir("detalhes");
        $render->login();
        
    }
    
    public function obra($id){
        return parent::SelectObraId($id);
    }
 
}
