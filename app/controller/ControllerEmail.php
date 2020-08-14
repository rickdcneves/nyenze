<?php

namespace App\Controller;
use PHPMailer\PHPMailer\PHPMailer;

class ControllerEmail{
    public function envioEmail($nome,$email,$assunto,$corpo){
        $mail= new PHPMailer();
        $mail->CharSet = "UTF-8";
        $mail->isSMTP();
        $mail->SMTPDebug=0;
        $mail->Host='smtp.zoho.com';
        $mail->Port=587;
        $mail->SMTPSecure='tls';
        $mail->SMTPAuth=true;
        $mail->Username='geral@nyenze.com';
        $mail->Password='Kriminal famaly2020';

        $mail->setFrom('geral@nyenze.com', 'Nyenze');
        $mail->addReplyTo('geral@nyenze.com', 'Nyenze');
        $mail->addAddress($email, "Sr(a) ".$nome);
        $mail->Subject=$assunto;
        $mail->IsHTML(true); 
        ob_start();
        include 'mail.php';
        $mail->Body=ob_get_clean();
        
        if (!$mail->send()){
            echo "Erro ao Enviar Email".$mail->ErrorInfo;
        }else{ 
            echo "Email enviado Para: ".$email;
        }
        
    }
}
?>
