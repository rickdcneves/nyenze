<?php

namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\interfaceView;
use App\Model\ClassObra;

class ControllerDetalhes extends ClassObra{
    

    public function obras() {
        $render=new ClassRender();
        $render->setTitle("Shop");
        $render->setDescription("Pagina Inicial");
        $render->setKeywords("Produzida para artistas");
        $render->setDir("detalhes");
        $render->renderLayoutUser();
        
    }
    
    public function obra($id){
        return parent::SelectObraId($id);
    }
 
}
