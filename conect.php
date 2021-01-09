<?php

    //
    // CONEXÃO COM BANCO DE DADOS COM PHP
    //
    
    //Ip do seu banco de dados
    define('HOST', '127.0.0.1'); 

    //User do seu banco de dados
    define('USUARIO', 'root'); 

    //Sanha do seu banco de dados
    define('SENHA', ''); 

    //Seleceiona o banco pre definido aqui, no meu 
    //caso criarei um banco com nome de 'teste'.
    define('DB', 'teste'); 


    //Essa variavel você usará para fazer conexão em outros aqruivos
    //para puxar dados, consultar e etc;
    //
    //Se caso não for possivel conectar com o banco de dados definido acima,
    //aparecerá a mensagem 'NÃO FOI POSSIVEL CONECTAR';
    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('NÃO FOI POSSIVEL CONECTAR');

?>