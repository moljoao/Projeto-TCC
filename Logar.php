<?php
session_start();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planeta Acai - Login</title>
    <link rel="stylesheet" href="CSS/boot.css">
    <link rel="stylesheet" href="CSS/Logar.css">
</head>
<body>
    <div class="my-4 zero">texto</div>
    <div class="my-4 zero">texto</div>
    
    <div class="container bg-light my-5">
        <div class="row">
            <div class="col-12 text-center my-3">
                <img src="img/logo9.png" width="150px" height="150px" >
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-lg-12 col-md-10">
            <form action="validar/validarLogin.php" id="testar" method="POST">
                <div class="col-lg-12  mx-auto text-black mb-4">
                  <label for="">Digite seu Usuário ou email:</label>
                  <input class="form-control" type="text" name="user" id="usuario">
                  <div><p class="d-none erro" id="userErro">Nome ou email errado, tente novamente</p></div>
                </div>
                <div class="col-lg-12 mx-auto text-black mb-5">
                  <label for="">Digite sua Senha:</label>
                  <input  class= "form-control" type="password" name="pass" id="password">
                  <div><p class="invalid-feedback d-none col-8"  id="passErro">Senha errada, tente novamente</p></div>
                </div>
                <div class="col-lg-12 mx-auto mb-4">     
                  <button class="form-control form-control-lg btn-lg btn btn-outline-primary" type="submit">Entrar</button>
                </div>
                </div>
                    <a class="mb-3 senha" href="Recuperar/Recuperar.php">Esqueci Minha Senha</a>                        
                </div>
            </form>
            </div>
        </div>
    </div>
    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="validar/validar.js"></script>
</body>

</html>