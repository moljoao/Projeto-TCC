<?php 
    include "../Banco/conexao.php";



    $sql = $conn->prepare("INSERT INTO Produtos (imagem, nome, descricao, preco, tipo) VALUES (?,?,?,?,?)");
    $sql -> bind_param("sssds", $imagem, $nomeProduto, $descricao, $preco, $tipo);
    $sql -> execute();

    echo "Cadastro realizado com sucesso";

    $sql -> close();
    $conn -> close();

?>