<?php
  include_once('./actions/connection.php');    
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastre-se aqui</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/estilo.css">
    </head>
    <body>
        <?php
            include_once('../includes/menuIndex.php');    
        ?>
         <br/><br/><br/><br/>
        <main>
           
            <section class="login">
                <div class="card">
                    <form action="./actions/cadastro_usuario.php" method="post">
                        <h1 class="text-info" class="tema" class="text-info">Cadastre-se</h1>
                        <input class= "table-info" type="text" name="nome" placeholder="Digite o seu nome">                   
                        <input class= "table-info" type="email" name="email" placeholder="Digite o seu e-mail">
                        <input class= "table-info" type="password" name="senha" placeholder="Digite uma senha">
                        <input class= "table-info" type="password" name="conf_senha" placeholder="Confirme a sua senha">
                        <button class= "table-info" id="button_cadastrar" type="submit"><b>Cadastre-se</b></button>
                        <a href="../index.php">Já possui cadastro? Realize o login.</a>            
                    </form>
                </div>
            </section>
        </main>

        <?php include_once('../includes/rodape.php') ?>

    </body>
</html>