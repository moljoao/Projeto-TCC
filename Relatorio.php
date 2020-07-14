<?php

session_start();
if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
  header("Location: Projeto.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planeta Acai - Relatorio</title>
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/boothome.css">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/Home.css">
</head>
<body>
    <!-- NavBar esta sendo puxada da pasta 'BASES' -->
<?php
include "Bases/navBar.php"
?>


<p class="mb-5 my-5">texto</p>
<p class="mb-5 my-5">texto</p>
<p class="mb-5 my-5">texto</p>
<p class="mb-5 my-5">texto</p>
<p class="mb-5 my-5">texto</p>

<!-- Rodape esta sendo puxada da pasta 'BASES' -->
<?php include "Bases/rodape.php" ?>
    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="validar/validar.js"></script>  
</body>
</html>