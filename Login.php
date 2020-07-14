<?php

include_once 'Banco/conexao.php';

// todas as informaçoes 'usuario ou email e senha' precisam ser verdadeiras.
$sql = $conn->prepare("SELECT * FROM Funcionario WHERE (email = ? OR userName = ?) AND senha = ? and ativo = 'ativo'"); 
$sql->bind_param("sss", $user, $user, $pass);

$sql->execute();

$resultado = $sql->get_result();
$linha = $resultado->fetch_assoc();

$sql -> close();
$conn -> close();

if(empty($linha)){
    echo "FalhaLogin";
    die();
}
else {
    $_SESSION['idPessoa'] = $linha['idPessoa'];
    $_SESSION['login'] = true;
    $_SESSION['nome'] = $linha['nome'];
    $_SESSION['tipoUsuario'] = $linha['tipoUsuario'];
        
   switch($linha['tipoUsuario']){
       case "administrador":
       echo "sucessoADM";
       break;
    //    case "":
    //    echo "";
    //    break;
    // Criar um "case" pra cada funcionario
       default:
       echo "FalhaLogin";
       break;
   }
}
?>