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
    <title>Planeta Acai - Mesas</title>
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/car.css">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/boothome.css">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/Home2.css">
    <!-- efeito de pagina do conteudo do cardapio -->
    <?php include "js/paginacao.php" ?>
</head>
<body>
    <!-- NavBar esta sendo puxada da pasta 'BASES' -->
<?php include "Bases/navBar.php" ?>

<p class="mb-5 my-5 zero">texto</p>
<div class="container-fluid2 back">
<div class="row">
<div class="col-sm-12 text-center">
<img width="200px" height="200px" src="img/logo9.png">
</div>
    <div class="col-sm-12">
     <hr>
    </div>
    <div class="col-sm-12 cor4 text-center">
    <h1><i> Mesas </i></h1>
</div>
    <div class="col-sm-12 my-2">
    <div class="btn-group ml-5">
  <button onclick="Mesa1()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 ml-5 my-1">MESA 1</button>
  <button onclick="Mesa2()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 ml-4 my-1">MESA 2</button>
  <button onclick="Mesa3()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 ml-4 my-1">MESA 3</button>
  <button onclick="Mesa4()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 ml-4 my-1">MESA 4</button>
  <button onclick="Mesa5()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 ml-4 my-1">MESA 5</button>
  <button onclick="Mesa6()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 ml-4 my-1">MESA 6</button>
  <button onclick="Mesa7()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 ml-4 my-1">MESA 7</button>
  <button onclick="Mesa8()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 ml-4 my-1">MESA 8</button>
  <button onclick="Mesa9()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 ml-4 my-1">MESA 9</button>
  <button onclick="Mesa9()" type="button" class="btn shadow-lg p-3 bg-success rounded btn-outline-light1 ml-5 vermelha my-1"><b>DELIVERY</b></button>
</div>
    </div>
    <!-- conteudo do cardapio -->
<div class="shadow-lg scrol p-3 bg-white rounded container2 mx-auto ml2 my-2 col-sm-11">
<div class="d-block" id="Mesa1">

<?php $Mesa = "1"; include "Prod/SelecionarMesas.php" ?></div>

<div class="d-none" id="Mesa2">
<?php $Mesa = "2"; include "Prod/SelecionarMesas.php" ?></div>

<div class="d-none" id="Mesa3">
<?php $Mesa = "3"; include "Prod/SelecionarMesas.php"?></div>

<div class="d-none" id="Mesa4">
<?php $Mesa = "4"; include "Prod/SelecionarMesas.php" ?></div>

<div class="d-none" id="Mesa5">
<?php $Mesa = "5"; include "Prod/SelecionarMesas.php" ?></div>

<div class="d-none" id="Mesa6">
<?php $Mesa = "6"; include "Prod/SelecionarMesas.php"?></div>

<div class="d-none" id="Mesa7">
<?php $Mesa = "7"; include "Prod/SelecionarMesas.php"?></div>

<div class="d-none" id="Mesa8">
<?php $Mesa = "8"; include "Prod/SelecionarMesas.php"?></div>

<div class="d-none" id="Mesa9">
<?php $Mesa = "9"; include "Prod/SelecionarMesas.php"?></div>

</div>
</div>
</div>


<!-- Rodape esta sendo puxada da pasta 'BASES' -->
<?php include "Bases/rodape.php" ?>
    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="validar/validar.js"></script>  
</body>
</html>