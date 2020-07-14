<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planeta Acai - Recuperar Senha</title>
    <!-- Bootstrap sera padrao, para realização de mudanças no bootstrap copie o arquivo original e modifique a copia -->
    <link rel="stylesheet" href="../CSS/boot.css">
    <!-- alterações feitas manualmente deve ser feita num arquivo css especifico para essa pagina -->
    <link rel="stylesheet" href="../CSS/Recuperar.css">
</head>
<body>
<div class="container bg-light my-5">
       <div class="row">
       <div class="col-12 text-center my-2">
       <h1 class="display-4 ml-5">Recuperar Senha</h1>
            </div>
       </div>
    </div>
    <div class="jumbotron my-3">
        <p class="lead ml-5">Escolha uma das opções abaixo para recuperar sua senha.</p>
        <hr class="my-3">
        <div class="form-check ml-5 my-3 form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1"><h5>Enviar um Codigo por mensagem de texto para o meu celular.</h5></label>
</div>
<br>
<div class="form-check ml-5 my-2 form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2"><h5>Enviar uma mensagem com o link no meu email.</h5></label>
</div>
    <div class="row">
        <a class="ml-5 col-4 my-3 btn btn-outline-success btn-lg" href="#" role="button">Continuar</a>
        <a class="ml-5 col-2 my-3 btn btn-outline-danger btn-lg" href="../Logar.php" role="button">Cancelar</a>
    </div>
    </div>   
</body>
</html>