<?php

namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\interfaceView;
use App\Model\ClassCompra;
use App\Model\ClassObra;
use App\Model\ClassLucro;
use App\Model\ClassUser;
use App\Model\ClassContacto;


class ControllerCompra extends ClassCompra{
    protected $estado="Não Confirmado";
    protected $id_artista;
    protected $id_user;
    protected $id_obra;
    protected $data_venda;
    protected $data_estado;
    protected $qtd;
    protected $subtotal;
    protected $total;
    protected $lucro;

    public function comprasFeitas(){
        $render=new ClassRender();
        $render->setTitle("Compras Feitas");
        $render->setDescription("");
        $render->setKeywords("");
        $render->setDir("compra");
        $render->renderLayoutUser();
    }


    
    public function recVariaveis(){
        if(isset($_POST['qtd'])){
            $this->qtd= filter_input(INPUT_POST, 'qtd');
        }
        $this->id_obra=base64_decode($_GET['obra']);
        $this->id_artista=base64_decode($_GET['art']);
        $this->data_estado=date('d/M/y');
        $this->data_venda=date('d/M/y');
        $this->id_user=$_SESSION['login'][0]['id'];
        
        $aux=new ClassObra();
        $auxLucro=new ClassLucro();
        
        $this->subtotal=($aux->isPreco($this->id_obra))*($this->qtd);
        $this->lucro=$this->subtotal*($auxLucro->percentagem()/100);
        $this->total=$this->subtotal+$this->lucro;
    }
    
    public function confirmar(){
        session_start();
        if(isset($_SESSION['login'])){
            $this->recVariaveis();
            $this->registarCompra($this->estado, $this->id_artista, $this->id_user, $this->id_obra, $this->data_venda, $this->data_estado, $this->qtd, $this->subtotal, $this->total, $this->lucro);
            $aux_qtd=new ClassObra();
            $aux_qtd->reduzirQtd($this->qtd, $this->id_obra);
            $this->emailCompra();
            echo "<script>window.location.href='/nyenze/compra/comprasFeitas'</script>";
            
        }else{
            echo "<script>window.location.href='/nyenze/login/entrar?msg=". base64_encode("Antes de Efectuar Uma Compra Deve Fazer o Login")."'</script>";
        }
    }
    
    public function comprasUser($id_user){
        return parent::comprasFeitasUser($id_user);
    }
    
    public function emailCompra(){
        $a=new ClassUser();
        $nome=$a->isNome($this->id_user);
        $b=new ClassContacto();
        $email=$b->isEmail($this->id_user);
        $aux=new ControllerEmail();
        $c=new ClassObra();
        $titulo=$c->isTitulo($this->id_obra);
        
        $aux->envioEmail($nome, $email, "Estado da sua compra", $this->corpoEmailConfirmacao($nome,$titulo));
    }
    
    public function corpoEmailConfirmacao($nome,$titulo){
        return "<p>Proprietario: ".$nome."</p>
                <table border='0'  style='width: 100%;'>
                    <tr style='background-color: black;color: #FFFFFF; padding: 20px;text-align: center;'>
                        <td style='width: 10%;'>
                            REF
                        </td>                                            
                        <td style='width: 20%;'>
                            Nome
                        </td>
                        <td style='width: 20%;'>
                            Preço
                        </td>
                        <td style='width: 10%;'>
                            Quantidade
                        </td>
                        <td style='width: 20%;'>
                            Total
                        </td>
                        <td style='width: 20%;'>
                            Estado
                        </td>                                            
                    </tr>
                    <tr style='background-color:darkgray;color: #FFFFFF; padding: 20px;text-align: center;'>
                        <td style='width: 10%;'>
                            ".$this->id_obra."
                        </td>                                            
                        <td style='width: 20%;'>
                            ".$titulo."
                        </td>
                        <td style='width: 20%;'>
                            ".$this->subtotal." Kzs
                        </td>
                        <td style='width: 10%;'>
                            ".$this->qtd."
                        </td>
                        <td style='width: 20%;'>
                            ".$this->total." Kzs
                        </td>
                        <td style='width: 20%;'>
                            ".$this->estado."
                        </td>
                    </tr>
                </table>
            <p style='text-align: right;'>".date('d/M/Y')."</p>
            
            <p>Cumprimentos</p>
            <p>Equipa da Nyenze</p>
            <p>https://www.nyenze.com/</p>";
    }    
    
    
}
