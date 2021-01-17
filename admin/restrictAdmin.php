    
    <!-- ESSA É A PÁGINA QUE SOMENTE USUARIOS QUE TIVEREM A PERMISSÃO 1 (ADMIN)
    PODEM ACESSAR -->
    
    <?php
        session_start();
        //VERIFICA SE O USUÁRIO ESTÁ LOGADO
        include('../verificarLogin.php');
        //VERIFICA O RANK DO USUÁRIO
        include('verifyRank.php');
    ?>
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Área Admin</title>
    </head>
    <body>

        <!-- ESSA É A PARTE DE TESTES, VOCÊ PODE ALTERA-LA SEM NENHUM PROBLEMA-->
        Olá , <?php echo strtoupper($_SESSION['usuario']); ?>. Bem vindo ao Painel Admin.
        <a href="../logout.php">Sair</a>
        <br>
        <a href="../indexUSer.php">IndexUser</a><span style="font: normal 12px Arial; color: gray;"> <-- BOTAO PARA TESTES</span>
        
    </body>
    </html>