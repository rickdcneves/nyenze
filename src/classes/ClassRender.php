<?php


namespace Src\Classes;

class ClassRender {
    private $Dir;
    private $Title;
    private $Description;
    private $Keywords;

    public function getDir() {
        return $this->Dir;
    }

    public function getTitle() {
        return $this->Title;
    }

    public function getDescription() {
        return $this->Description;
    }

    public function getKeywords() {
        return $this->Keywords;
    }

    public function setDir($Dir) {
        $this->Dir = $Dir;
    }

    public function setTitle($Title) {
        $this->Title = $Title;
    }

    public function setDescription($Description) {
        $this->Description = $Description;
    }

    public function setKeywords($Keywords) {
        $this->Keywords = $Keywords;
    }

        
    public function renderLayout(){
        include (DIRREQ."app/view/admin/layout.php");   
    }
    
    public function addHeader(){
        if(file_exists(DIRREQ."app/view/admin/{$this->getDir()}/Header.php")){
            include 'app/view/admin/{$this->getDir()}/Header.php';
        }
    }    

    public function login(){
        include (DIRREQ."app/view/login.php");     
    }
    
    public function info(){
        include (DIRREQ."app/view/user/info/Main.php");     
    }  
   
    
    public function addMain(){
        if(file_exists(DIRREQ."app/view/admin/{$this->getDir()}/Main.php")){
            include DIRREQ."app/view/admin/{$this->getDir()}/Main.php";
        }       
    }    
    
    public function addFooter(){
        if(file_exists(DIRREQ."app/view/admin/{$this->getDir()}/Footer.php")){
            include 'app/view/admin/{$this->getDir()}/Header.php';
        }        
    }

    public function renderLayoutUser(){
        include (DIRREQ."app/view/user/layout.php");   
    }
    
    public function addHeaderUser(){
        if(file_exists(DIRREQ."app/view/admin/{$this->getDir()}/Header.php")){
            include 'app/view/user/{$this->getDir()}/Header.php';
        }
    }    

    public function addMenuUser(){
        if(file_exists(DIRREQ."app/view/admin/{$this->getDir()}/Menu.php")){
            include 'app/view/user/{$this->getDir()}/Menu.php';
        }       
    }     
    
    public function addMainUser(){
        if(file_exists(DIRREQ."app/view/user/{$this->getDir()}/Main.php")){
            include DIRREQ."app/view/user/{$this->getDir()}/Main.php";
        }       
    }    
    
    public function addFooterUser(){
        if(file_exists(DIRREQ."app/view/admin/{$this->getDir()}/Footer.php")){
            include 'app/view/user/{$this->getDir()}/Header.php';
        }        
    }
    
    
    
    public function renderLayoutCadastro(){
        include (DIRREQ."app/view/user/cadastro/Main.php");   
    }
    
    
    
}
