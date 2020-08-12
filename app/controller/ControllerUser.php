<?php
namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\interfaceView;
use App\Model\ClassCadastroArtista;
use App\Model\ClassContacto;
use App\Controller\ControllerEmail;
use App\Model\ClassLogin;

class ControllerUser extends ClassCadastroArtista{
    
    protected $nome;
    protected $pass;
    protected $genero;
    protected $dnasc;
    protected $tipo;
    protected $id_morada;
    protected $descricaolocalizacao;
    protected $ibam;
    protected $sobre;
    protected $numero;
    protected $id_provincia;
    protected $email;


    public function __construct(){
        $render=new ClassRender();
        $render->setTitle("Criar Conta");
        $render->setDescription("");
        $render->setKeywords("");
        $render->setDir("conta");
        $render->renderLayoutCadastro();
    }
    
    
    public function recVariaveis(){
        if(isset($_POST['nome'])){
            $this->nome= filter_input(INPUT_POST, 'nome');
        }
        if(isset($_POST['genero'])){
            $this->genero= filter_input(INPUT_POST, 'genero');
        }
        if(isset($_POST['dnasc'])){
            $this->dnasc= filter_input(INPUT_POST, 'dnasc');
        }
        if(isset($_POST['tipo'])){
            $this->tipo= filter_input(INPUT_POST, 'tipo');
        }
      
        if(isset($_POST['pass'])){
            $this->pass= filter_input(INPUT_POST, 'pass');
        }

        if(isset($_POST['municipio'])){
            $this->id_morada= filter_input(INPUT_POST, 'municipio');
        }
        if(isset($_POST['descricaolocalizacao'])){
            $this->descricaolocalizacao= filter_input(INPUT_POST, 'descricaolocalizacao');
        }
        
        if(isset($_POST['numero'])){
            $this->numero= filter_input(INPUT_POST, 'numero');
        }
        
        if(isset($_POST['provincia'])){
            $this->id_provincia= filter_input(INPUT_POST, 'provincia');
        }
        
        if(isset($_POST['pass'])){
            $this->pass= filter_input(INPUT_POST, 'pass');
        }
        if(isset($_POST['email'])){
            $this->email= filter_input(INPUT_POST, 'email');
        }
    }

    public function cadastrarUser(){
        $this->recVariaveis();
        parent::cadastroUser($this->nome, $this->dnasc,sha1($this->pass),$this->tipo, $this->id_morada, $this->id_provincia, $this->descricaolocalizacao, $this->genero);
        if($this->tipo=="Artista"){
            parent::cadastroArtista("", "", $this->ultimo());
        }
        $a=new ClassContacto();
        $a->cadastroContacto("email", $this->email,self::ultimo());
        $a->cadastroContacto("telefone", $this->numero,self::ultimo());
        $this->emailConfirmacao($this->email, $this->nome);
        echo "<script>window.location.href='/nyenze/login/entrar'</script>";
    }
    
    public function ultimo(){
        return parent::lastUser();
    }
    
    public function emailConfirmacao($email,$nome){
        $a=new ControllerEmail();
        $a->envioEmail($nome, $email, "Por favor faça a confirmação da sua conta na Nyenze", $this->corpoEmailConfirmacao($nome));
    }
    
    public function confirmar($user){
        $id= base64_decode($user);
        $a=new ClassLogin();
        $a->ativarConta($id);
        echo "<script>window.location.href='/nyenze/login/entrar'</script>";
    }

        public function corpoEmailConfirmacao($nome){
        return "<p>Olá,".$nome.", e bem-vindo(a) aos serviços da Nyenze!</p>
            <p>Pode ver o que temos para oferecer em https://www.nyenze.com.</p>
            <p> Para ativar a sua conta Nyenze, clique na ligação abaixo nos próximos 30 dias.</p>
            <p> ".DIRPAGE."conta/confirmar/".base64_encode($this->ultimo())."/</p>
            <p>Se tiver dúvidas sobre a sua conta Nyenze, contacte-nos através do endereço geral@nyenze.com. A nossa equipa de suporte técnico irá ajudá-lo com tudo o que necessita.</p>
            <p>Seja bem-vindo(a) a Nyenze.</p>
            <p>Cumprimentos</p>
            <p>Equipa da Nyenze</p>
            <p>https://www.nyenze.com/</p>";
    }
}