<?php
    if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
        header("Location: ../.php");
    }
    switch($_SESSION['tipoUsuario']){
        case "cliente":
            header("Location: ../Home.php");
            break;
    }
    if(empty($_POST)){
        echo "error";
    }

    $nomefunc = $_POST['NomeFunc'];
    $usernamefun = $_POST['UserNameFunc'];
    $emailfunc =$_POST['EmailFunc'];
    $senhafunc = $_POST['SenhaFunc'];
    $senhaconffunc = $_POST['Senhaconf'];
    $cpffunc = $_POST['CPFFUNC'];
    $telfixofunc = $_POST['TelFixoFunc'];
    $telfunc = $_POST['TelCelFunc'];
    $telfunc2 = $_POST['TelCelFunc2'];
    $tipousuario = ['tipoFunc'];
    $enderecofunc = ['End'];
    $cidadefunc = $_POST['CidFunc'];
    $estadofunc = $_POST['EstFunc'];
    $cepfunc = $_POST['CEPFUNC']; 
    $imagem = "";

    
    if (empty($nomefunc))
    {
        echo "Digite o nome do funcionario";     
        exit();
    }
    if (empty($usernamefunc))
    {
        echo "Digite um username para o funcionario";     
        exit();
    }
    if (empty($emailfunc))
    {
        echo "Digite o email do funcionario";     
        exit();
    }
    if (empty($senhafunc))
    {
        echo "Digite a senha do funcionario"; 
        exit(); 
    }
    if (empty($senhaconffunc))
    {
        echo "Digite a confirmação de senha";     
        exit();        
    }
    if($senhafunc != $senhaconffunc)
    {
        echo "senhas diferentes";
        exit();
    }
    if (empty($cpffunc))
    {
        echo "Digite o CPF do funcionario";     
        exit();
    }
    if (empty($telfixofunc))
    {
        echo "Digite o telefone fixo do funcionario";   
    }
    if (empty($telfunc))
    {
        echo "Digite o telefone do funcionario";     
        exit();
    }
    if (empty($telfunc2))
    {
        echo "Digite um segundo telefone do funcionario";     
    }
    if (empty($tipousuario))
    {
        echo "Digite o tipo de usuario";     
        exit();
    }
    if (empty($enderecofunc))
    {
        echo "Digite o endereco do funcionario";     
        exit();
    }
    if (empty($cidadefunc))
    {
        echo "Digite a cidade do funcionario";     
        exit();
    }
    if (empty($estadofunc))
    {
        echo "Digite o estado do funcionario";     
        exit();
    }
    if (empty($cepfunc))
    {
        echo "Digite o cep do funcionario";     
    }
     // verifica se foi enviado um arquivo
     if ( isset( $_FILES['arquivo']['name'] ) && $_FILES['arquivo']['error'] == 0 ) {
        
        $arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
        $nome = $_FILES[ 'arquivo' ][ 'name' ];
    
        // Pega a extensão
        $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
    
        // Converte a extensão para minúsculo
        $extensao = strtolower ( $extensao );
    
        // Somente imagens, .jpg;.jpeg;.gif;.png
        // Aqui eu enfileiro as extensões permitidas e separo por ';'
        // Isso serve apenas para eu poder pesquisar dentro desta String
        if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
            // Cria um nome único para esta imagem
            // Evita que duplique as imagens no servidor.
            // Evita nomes com acentos, espaços e caracteres não alfanuméricos
            $novoNome = uniqid ( time () ) . '.' . $extensao;
    
            // Concatena a pasta com o nome
            $destino = '../img/' . $novoNome;
    
            // tenta mover o arquivo para o destino
            if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
                //echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
                //echo '<img src="' . $destino . '"/>';
                $imagem = $novoNome;
            }
            else{
                echo "Não foi possível salvar a imagem";     
                exit();
            }
        }
        else{
            echo "A imagem não está em um formato correto";     
            exit();
        }
    }
    else{
        echo "Por favor, selecione uma imagem para o produto";
        exit();
        
    }

    if(isset($_POST['ativo'])){
        $ativo = true;
    }
    else{
        $ativo = false;
    }


    include "cadastroFunc.php";

?>