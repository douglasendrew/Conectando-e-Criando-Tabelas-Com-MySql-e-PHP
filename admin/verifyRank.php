<?php

    //AQUI SE FAZ A VERIFICAÇÃO DO RANK DO USUÁRIO;

    //session_start();

    //PEGA O NOME DO USUARIO;
    $usuario = $_SESSION['usuario'];
    
    //OBRIGATÓRIAMENTE PRECISA PEGAR O ARQUIVO DE CONEXÃO;
    include('../conexao.php');

    //AQUI ESTÁ PUXANDO O RANK DO USUARIO;
    $result_user = "SELECT rank_user FROM users WHERE usuario = '$usuario'";
    
    //EXECUTA QUERY ACIMA;
    $result = mysqli_query($conexao, $result_user);

    //RETORNA O RANK DO USUÁRIO;
    while($row = mysqli_fetch_assoc($result)) {$rank = $row['rank_user'];}

    //AQUI FAZ A VALIDAÇÃO, CASO O USUÁRIO FOR DIFERENTE DE 1 (ADMIN) ELE
    //ENVIA PARA A PÁGINA noPerm.php;
    if($rank != '1') {
        header('location: noPerm.php');
        exit();
    }
?>