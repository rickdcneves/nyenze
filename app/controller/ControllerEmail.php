<?php

use PHPMailer\PHPMailer\PHPMailer;


if (isset($_POST['email'])){ 

$mail= new PHPMailer();

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
$mail->addAddress($_POST['email'], 'MN');

$mail->Subject='Teste de envio';

//$mail->AddEmbeddedImage(DIRIMG."email/cabecalho.jpg", 'logo');
$mail->AddEmbeddedImage(DIRIMG."core-img/facebook.png", 'facebook');
$mail->AddEmbeddedImage(DIRIMG."core-img/instagram.png", 'instagram');
$mail->AddEmbeddedImage(DIRIMG."core-img/linkedin.png", 'linkedin');
$mail->AddEmbeddedImage(DIRIMG."core-img/whatsapp.png", 'whatsapp');

$mail->IsHTML(true); 
ob_start();
include 'mail.php';
$mail->Body=ob_get_clean();


if (!$mail->send()){
    echo "Erro ao Enviar Email".$mail->ErrorInfo;
}else{ 
    echo "Email enviado Para: ".$_POST['email'] ;
}
}
?>
<form action="" method="post">
    <input type="text" name="email" placeholder="Entre com o Email">
    <input type="submit" value="Mail me"> 
</form>