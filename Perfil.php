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
    <title>Planeta Acai - Perfil</title>
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/Home.css">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/boothome.css">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/Perfil.css">
    
   
</head>
<body>
    <!-- NavBar esta sendo puxada da pasta 'BASES' -->
<?php
include "Bases/navBar.php"
?>
<p class="mb-5 my-5">texto</p>
    <div class="container">
    
    <div class="card bg-light my-5">

  <div class="card-header ">
       <div class="col-sm-4 my-5">
                <h1 class="display-4">Planeta Açaí.</h1>
                <hr>
                <h1 class="display-4"><?php echo "<a> Name: <b>".$nome[0]."</b></a>"; ?></h1>
                <hr>    
            </div>

    <div><img class="imagem col-sm-4 col-lg-4 perfil" width="80px" height="220px" src="img/Suco de Acai.jpg"></div>

</div>
      </div>
  </div>

  <div class="card-body bg-white ">

    <li class="list-group-item border-dark bg-white text-black"> <a> <?php echo "<a> UserName: <b>". $nome[0]."</b></a>"; ?>  </a></li>
    <li class="list-group-item border-dark bg-white text-black"><a> <?php echo "<a> Email: <b>". $nome[0]."</b></a>"; ?>  </a></li>
    <li class="list-group-item border-dark bg-white text-black"><a> <?php echo "<a> Senha: <b>". $nome[0]."</b></a>"; ?>  </a></li>
    <li class="list-group-item border-dark bg-white text-black"><a> <?php echo "<a> Cpf: <b>". $nome[0]."</b></a>"; ?>  </a></li>
    <li class="list-group-item border-dark bg-white text-black"><a> <?php echo "<a> Telefone: <b>". $nome[0]."</b></a>"; ?>  </a></li>
    <li class="list-group-item border-dark bg-white text-black"><a> <?php echo "<a> Endereco: <b>". $nome[0]."</b></a>"; ?>  </a></li>
  </div>
</div>
</div>

<br><br>



<!-- Rodape esta sendo puxada da pasta 'BASES' -->
<?php
include "Bases/rodape.php"
?>

    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="validar/validar.js"></script>  
</body>
</html>