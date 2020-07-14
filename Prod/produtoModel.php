<?php 

    include "Banco/conexao.php";
    $sql = $conn->prepare("SELECT * FROM Produtos WHERE tipo = ".$produto." AND ativo = ativo");
    $sql->execute();
    $resultado = $sql->get_result();
    while ($linha = $resultado->fetch_assoc()) {
        echo "
        <div class='row'>
                <div class='col-sm-7'>
                      <h5>".$linha['nome']."</h5>
                </div>
                <div class='my-1'>
                <h5>R$: ".$linha['preco'].",00</h5>
                </div>
                <div class='col-sm-1 my-1'>
                <h5>|</h5>
                </div>
                <div class='col-sm-1 lateral my-1'>
                <h5>|</h5>
                </div>
                <div class='col-sm-3 junta lateral'>
                    <form>
                          <a href='#'><img class='junta3' src='img/comprar.png' width='30px' height='30px'></a>

                          <a href='#'> <img class='junta2 ml-1' src='img/info.png' width='30px' height='30px'></a>

                          <a href='#'> <img class='junta2 ml-1' src='img/alter.png' width='30px' height='30px'></a>
                    </form>
                </div>
                <div class='col-sm-8 junta'>
                      <p>".$linha['descricao']."</p>
                </div>
        </div>
        <hr>
        
        
        
        ";
    }
?>