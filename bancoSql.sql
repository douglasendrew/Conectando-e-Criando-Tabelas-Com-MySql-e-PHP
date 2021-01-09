    
    /* CRIANDO O BANCO DE DADOS; */
    /* obs: NO MEU CASO COLOQUEI O NOME DO BANCO COMO TESTE; */
    CREATE SCHEMA `teste` ;


    /* CRIANDO UMA TABELA COM OS CAMPOS DEFINIDOS PELO USUARIO; */
    /* CRIEI OS SEGUINTES CAMPOS: user_id, user, senha; */
    /* obs: Caso você queira que os ids dos usuarios sejam criados */
    /* automaticamente e na ordem, precisa inserir o 'AUTO_INCREMENT'; */
    CREATE TABLE `teste`.`usuarios` (
    `user_id` INT NOT NULL AUTO_INCREMENT,
    `user` VARCHAR(200) NOT NULL,
    `senha` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`user_id`));

    /* CASO VOCÊ TENHA MUITOS BANCOS DE DADOS CRIADOS, RECOMENDADO USAR O SEGUINTE COMANDO; */
    USE teste /* NO LUGAR DE 'teste' COLOQUE O NOME DA SUA TABELA, AQUELA QUE CRIAMOS ACIMA; */

    /* CRIAR O USUARIO E  SENHA DOS USUARIOS; */

    /*LEMBRANDO QUE EM 'usuarios' É O NOME QUE DEFINIMOS PARA A TABELA; */
    /*NOS CAMPOS 'user' E 'senha' VOCÊ SUBSTITUI PELOS NOMES QUE VOCÊ DEFINIU ACIMA; */
    INSERT INTO usuarios (user, senha) VALUES ('tester', 'tester')
    /* CONFIRA EM SEU BANCO DE DADOS SE FOI INSERIDO OS CALORES QUE DEFINIMOS ACIMA, user: tester, senha: tester; */
