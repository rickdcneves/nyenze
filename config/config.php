<?php
#arquivos das pastas raizes
$pasta="nyenze/";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pasta}");

if(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/'){
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$pasta}");
}else{
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/{$pasta}");
}

#Pastas do Public constantes
define('DIRIMG',DIRPAGE."public/img/");
define('DIRCSS',DIRPAGE."public/css/");
define('DIRJS',DIRPAGE."public/js/");
define('DIRVENDOR',DIRPAGE."src/vendor/");


#acesso a Base de Dados

define('HOST', "localhost");
define('DB', "nyenze");
define('USER', "root");
define('PASS', "");

//Redes sociais
define('FACEBOOK', "https://www.facebook.com/");
define('INSTAGRAM', "https://www.instagram.com/");
define('WHATSAPP', "https://www.whatsapp.com/");
define('LINKEDIN', "https://www.linkedin.com/");