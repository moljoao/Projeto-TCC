<?php

session_start();

if (empty($_POST)){
    header("Location: Logar.php");
    die();
}

$user = $_POST['user']; //usuario
$pass = $_POST['pass']; //senha

if(empty($user)){
    echo "ErroEmail";
    die();
}
if(empty($pass)){
    echo "ErroSenha";
    die();
}


include_once 'Login.php'; //incluir todas as informações da pagina que esta sendo trazido. 


?>