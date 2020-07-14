<?php

session_start();
if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
  header("Location: Home.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planeta Acai - Funcionarios</title>
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/boothome.css">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/Home.css">  
</head>
<body>
  <!-- Navbar do site -->
<?php
include "Bases/navBar.php"
?>
<div class="zero my-5">Texto</div>
<!-- Formulario de Cadastro -->
<?php include "Func/func.php"?>
<!-- Rodapé da pagina -->
<?php include "Bases/rodape.php" ?>
    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="validar/validar.js"></script> 

    <?php
    include "validar/imgFunc.php"
    ?> 
</body>
</html>