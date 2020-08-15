<?php

namespace App\Controller;
use Src\Classes\ClassRender;
use App\Model\ClassCompra;
use App\Model\ClassContacto;
use App\Controller\ControllerEmail;


class ControllerVenda extends ClassCompra{

    public function lista(){
        $render=new ClassRender();
        $render->setTitle("Listar Vendas");
        $render->setDescription("");
        $render->setKeywords("");
        $render->setDir("listarVendas");
        $render->renderLayout();
    }

    public function listaConf(){
        $render=new ClassRender();
        $render->setTitle("Listar Vendas Por Confirmar");
        $render->setDescription("");
        $render->setKeywords("");
        $render->setDir("listarVendasConf");
        $render->renderLayout();
    }    

    public function encomendas(){
        $render=new ClassRender();
        $render->setTitle("Lista de Encomendas");
        $render->setDescription("");
        $render->setKeywords("");
        $render->setDir("encomendas");
        $render->renderLayout();
    }    
    
    public function confirmar(){
        $emailArtista=base64_decode($_GET['email']);
        $emailCliente= base64_decode($_GET['emailus']);
        $venda=base64_decode($_GET['venda']);
        $a=new ClassCompra();
        $a->mudarEstado("Pago",$venda);
        $this->emailClienteMudancaEstado($emailCliente,$venda,$emailArtista); 
    }
    
    public function emailClienteMudancaEstado($emailCliente,$id_venda,$emailArtista){
        $a=new ClassContacto();
        $nome=$a->nomeEmail($emailCliente);
        $nomeArt=$a->pseudoEmail($emailArtista);
        $aux=new ControllerEmail();
        $b=new ClassCompra();
        $obra=$b->isVenda($id_venda);
        $aux->envioEmail($nome, $emailCliente, "Mudança de estado da sua compra", $this->corpoEmailEstado($nome,$obra));
        $aux->envioEmail($nomeArt, $emailArtista, "Nova encomenda", $this->corpoEmailArtista($obra));
        echo "<script>window.location.href='/nyenze/venda/listaConf'</script>";
    }

   public function corpoEmailEstado($nome,$obra){
        return "<p>Proprietario: ".$nome."</p>
                <table border='0'  style='width: 100%;'>
                    <tr style='background-color: black;color: #FFFFFF; padding: 20px;text-align: center;'>                                            
                        <td style='width: 20%;'>
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
                        <td style='width: 20%;'>
                            ".$obra[0]['obra']."
                        </td>
                        <td style='width: 20%;'>
                            ".$obra[0]['titulo']."
                        </td>
                        <td style='width: 20%;'>
                            ".$obra[0]['preco']." Kzs
                        </td>
                        <td style='width: 10%;'>
                            ".$obra[0]['qtd']."
                        </td>
                        <td style='width: 20%;'>
                            ".$obra[0]['total']." Kzs
                        </td>
                        <td style='width: 20%;'>
                            ".$obra[0]['estado']."
                        </td>
                    </tr>
                </table>
            <p>
            <p>Referência: ".$obra[0]['venda']."</p>
            <p style='text-align: right;'>".date('d/M/Y')."</p>
            
            <p>Cumprimentos</p>
            <p>Equipa da Nyenze</p>
            <p>https://www.nyenze.com/</p>";
    }

   public function corpoEmailArtista($obra){
        return "<p>Nova Encomenda:</p>
                <table border='0'  style='width: 100%;'>
                    <tr style='background-color: black;color: #FFFFFF; padding: 20px;text-align: center;'>                                            
                        <td style='width: 20%;'>
                            REF
                        </td>
                        <td style='width: 20%;'>
                            Nome
                        </td>
                        <td style='width: 10%;'>
                            Quantidade
                        </td>
                                            
                    </tr>
                    <tr style='background-color:darkgray;color: #FFFFFF; padding: 20px;text-align: center;'>                                           
                        <td style='width: 20%;'>
                            ".$obra[0]['obra']."
                        </td>
                        <td style='width: 20%;'>
                            ".$obra[0]['titulo']."
                        </td>
                        <td style='width: 10%;'>
                            ".$obra[0]['qtd']."
                        </td>

                    </tr>
                </table>
            <p>
            <p>Referência: ".$obra[0]['venda']."</p>
            <p style='text-align: right;'>".date('d/M/Y')."</p>
            
            <p>Cumprimentos</p>
            <p>Equipa da Nyenze</p>
            <p>https://www.nyenze.com/</p>";
    }
    
    public function todasVendas(){
        return parent::allVendas();
    }

    public function todasVendasNConf(){
        return parent::allVendasNConf();
    }    

    public function todasEncomendasArtista($id){
        return parent::encomendasArtista($id);
    }
    
    public function emailCliente($id_cliente){
        $a=new ClassContacto();
        return $a->isEmail($id_cliente);
         
    }

}
