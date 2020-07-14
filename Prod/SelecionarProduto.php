<?php
if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
        header("Location: ../Produtos.php");
    }
    switch($_SESSION['tipoUsuario']){
        case "cliente":
            header("Location: ../Home.php");
            break;
    }
    if(empty($_POST)){
        header("Location: ../projeto.php");
    }


    $nomeProduto = $_POST['nomprod'];

    
        echo $nomeProduto;     
        exit();

?>