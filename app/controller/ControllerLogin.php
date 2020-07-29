<?php

namespace App\Controller;
use Src\Classes\ClassRender;
use App\Model\ClassLogin;

class ControllerLogin extends ClassLogin{
    protected $contacto;
    protected $pass;

    public function entrar() {
        $render=new ClassRender();
        $render->setTitle("Login");
        $render->setDescription("Pagina Inicial");
        $render->setKeywords("Produzida para artistas");
        $render->setDir("login");
        $render->login();
        
    }
    
    public function recVariaveis(){
        if(isset($_POST['contacto'])){
            $this->contacto= filter_input(INPUT_POST, 'contacto');
        }
        if(isset($_POST['pass'])){
            $this->pass= sha1(filter_input(INPUT_POST, 'pass'));
        }    
    }
    
    public function sair(){
        session_start();
        session_destroy();
       
        echo "<script>window.location.href='/nyenze/homepage/obras'</script>";
    }


    public function verificar(){
        $this->recVariaveis();
        $dados=parent::login($this->contacto,$this->pass);
        if($dados){
            if(!($dados[0]['tipo']=="Artista" || $dados[0]['tipo']=="Admin")){
                session_start();
                $_SESSION['login']=$dados;
                echo "<script>window.location.href='/nyenze/homepage/obras'</script>";
                
            }else{
                session_start();
                $_SESSION['login']=$dados;
                if(!$dados[0]['pseudonimo']){
                   echo "<script>window.location.href='/nyenze/artista/addInfo'</script>"; 
                }else{
                    echo "<script>window.location.href='/nyenze/homepage/dashboard'</script>";    
                }
            }
        }else{
            echo "<script>window.location.href='/nyenze/login/entrar?msg=". base64_encode("Credenciais Incorrectas")."'</script>";      
        }
        
    }
 
}
