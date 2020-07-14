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
    <title>Planeta Acai - Cardapio</title>
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
    <h1><i> Cardapio </i></h1>
</div>
    <div class="col-sm-2">
    <div class="btn-group-vertical ml-5">
  <button onclick="crepe()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 my-2">Crepe Francês</button>
  <button onclick="pastel()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 my-2">Pastel</button>
  <button onclick="churros()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 my-2">Churros</button>
  <button onclick="porcao()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 my-2">Porção</button>
  <button onclick="caldos()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 my-2">Caldos</button>
  <button onclick="bebidas()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 my-2">Bebidas</button>
  <button onclick="Outros()" type="button" class="btn shadow-lg p-3 bg-white rounded btn-outline-light1 my-2">Outros</button>
</div>
    </div>
    <!-- conteudo do cardapio -->
<div class="shadow-lg scrol p-3 bg-white rounded container2 my-2 col-sm-6">
<div class="d-block" id="crepe">
<?php $produto = "1"; include "Prod/produtoModel.php" ?></div>

<div class="d-none" id="pastel">
<?php $produto = "2"; include "Prod/produtoModel.php" ?></div>

<div class="d-none" id="churros">
<?php $produto = "3"; include "Prod/produtoModel.php"; ?></div>

<div class="d-none" id="porcao">
<?php $produto = "4"; include "Prod/produtoModel.php" ?></div>

<div class="d-none" id="caldos">
<?php $produto = "5"; include "Prod/produtoModel.php" ?></div>

<div class="d-none" id="bebidas">
<?php $produto = "6"; include "Prod/produtoModel.php"?></div>

</div>
    <div class="col-sm-3  col-md-4">
                        <div class="card cor2 my-2" id="card">
                            
                            <div class="card-body">
                                <h4 class="card-title text-center">Comanda</h4>
                                <h6 class="card-subtitle mb-2 text-center"> Mesa </h6>
                                <hr class="hr1">
                                <div class="mb-1 descer">
                                    <hr class="hr1">
                                <button class="btn btn-outline-primary ml-4 col-sm-5 "> Fechar Comanda</button>
                                    <button class="btn btn-outline-primary ml-4 col-sm-5 "> Fechar Comanda</button>
                                </div>
                            </div>
                           </div>
                    </div>
</div>
</div>
<!-- Rodape esta sendo puxada da pasta 'BASES' -->
<?php include "Bases/rodape.php" ?>
    
    <div class="modal fade" id="Pedidomodal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Titulo da caixa de informação</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6">
                                <h5>titulo do modal</h5>
                                <p>Aenean porttitor odio magna, nec condimentum libero volutpat a.
                                    Praesent viverra ligula a euismod volutpat.
                                    Phasellus posuere est eget semper mollis.
                                    Nunc suscipit varius quam in bibendum. Vivamus sollicitudin velit erat,
                                    scelerisque hendrerit ex porta in. Duis sapien erat, sollicitudin quis metus
                                    molestie,
                                    dapibus congue velit. Aenean iaculis nec lacus quis euismod. Aliquam at mauris
                                    quis
                                    magna
                                    fermentum aliquam.
                                    Vestibulum vitae malesuada neque.</p>
                            </div>
                            <div class="col-6">
                                <h5>titulo do modal</h5>
                                <p>Aenean porttitor odio magna, nec condimentum libero volutpat a.
                                    Praesent viverra ligula a euismod volutpat.
                                    Phasellus posuere est eget semper mollis.
                                    Nunc suscipit varius quam in bibendum. Vivamus sollicitudin velit erat,
                                    scelerisque hendrerit ex porta in. Duis sapien erat, sollicitudin quis metus
                                    molestie,
                                    dapibus congue velit. Aenean iaculis nec lacus quis euismod. Aliquam at mauris
                                    quis
                                    magna
                                    fermentum aliquam.
                                    Vestibulum vitae malesuada neque.</p>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">SAIR</button>
                    </div>
                </div>
            </div>
        </div>

    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="validar/validar.js"></script>  
</body>
</html>