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
    <title>Planeta Acai - Home</title>
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/boothome.css">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/Home2.css">
</head>
<body>
<?php
include "Bases/navBar.php"
?>
   <div class="container-fluid my-5">
                <div class="row justify-content-sm-center my-3">
                <div class="col-6">
                        <div class="card cor2 my-5" id="card3">
                            <img class="card-img-top" width="400px" height="400px" src="img/Suco de Acai.jpg">
                    </div>
                </div>
                <div class="col-6">
                        <div class="card cor2 my-5" id="card3">
                            <img class="card-img-top" width="400px" height="400px" src="img/Crepe Ovomaltine.jpg">
                    </div>
                </div>
                    <div class="col-3">
                        <div class="card cor2 my-1" id="card3">
                            <img class="card-img-top"  height="400px" src="img/Açaí 4.jpg">
                    </div>
                </div>
                <div class="col-6">
                        <div class="card cor2 my-1" id="card3">
                            <img class="card-img-top" width="400px" height="400px" src="img/Barca de Açaí Grande.jpeg">
                    </div>
                </div>
                <div class="col-3">
                        <div class="card cor2 my-1" id="card3">
                            <img class="card-img-top"  height="400px" src="img/Churros (3).jpeg">
                    </div>
                </div>
            </div>
</div>
<!-- rodape da pagina -->
<?php include "Bases/rodape.php" ?>
    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="validar/validar.js"></script>  
</body>
</html>
