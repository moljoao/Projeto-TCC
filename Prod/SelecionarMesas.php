<?php 

    include "Banco/conexao.php";
    $sql = $conn->prepare("SELECT * FROM Mesas WHERE tipo = ".$Mesa." AND ativo = ativo");
    $sql->execute();
    $resultado = $sql->get_result();
    while ($linha = $resultado->fetch_assoc()) {
        echo "<div class='col-sm-3  col-md-4'>
        <div class='card cor2 my-2' id='card'>
            
            <div class='card-body'>
                <h4 class='card-title text-center'>Comanda</h4>
                <hr class='hr1'>
                <div class='mb-1 descer'>
                    <hr class='hr1'>
                <button class='btn btn-outline-primary ml-4 col-sm-5 '> Alterar Comanda</button>
                    <button class='btn btn-outline-primary ml-4 col-sm-5 '> Fechar Comanda</button>
                </div>
            </div>
           </div>
    </div>
        
        
        
        ";
    }
?>