<?php
    include_once('./php/actions/connection.php');    
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>       
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="imagens/logo.jpeg">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/estilo.css">
        <script src="js/script.js"></script>

        <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Web site created using create-react-app"/>

        <link rel="apple-touch-icon" href="%PUBLIC_URL%/logo192.png" />

        <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
        
        <title>Full Stack Eletro</title>
    </head>

    <body>

    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root"></div>

    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="imagens/logo.jpeg" alt="Full Stack Eletro" id="logo"></a>
        <ul id="nav_menu">
            <li class="item-menu">
                <a href="index.php"> Página Inicial </a>
            </li>
            <li class="item-menu">
                <a href="./php/produtos.php"> Nossos Produtos </a>
            </li>
            <li class="item-menu">
                <a href="./php/loja.php"> Nossas lojas </a>
            </li>
            <li class="item-menu">
                <a href="./php/contato.php"> Nossos Contatos </a>
            </li>
            <li class="item-menu">
                <a href="./php/cadastro.php"> Cadastro </a>
            </li>
            <li class="item-menu">
                <a href="./php/envio_pedido.php"> Pedidos </a>
            </li>
        </ul>
    </nav>
</div>
        <br/>
        <header class="container-md">
            <h1 class="bem_vindo"> Seja Bem-vindo(a)!</h1>
        </header>        
        <br/>

        <div>    
            <main>
            
                <br/><br/> <!-- <em> ou <u>-->
                <h3 class="bem_vindo"> Aqui em nossa loja, <em>programadores tem desconto</em> nos produtos para a sua casa! </h3>
                <br/><br/>
                
                <section class="login">
                    <div class="card">                   
                        <form action="../actions/login_usuario.php" method="post">
                            <img class="logo_login" src="imagens/logo.jpeg">
                            <h1 class="text-info"> Login! </h1>
                            <input class= "table-info" type="nome" name="nomecliente" placeholder="Digite o seu e-mail.">
                            <input class= "table-info" type="password" name="enderco" placeholder="Digite sua senha. ">
                            <button class= "table-info" type="submit"><b>Entrar</b></button>
                            <a href="../php/cadastro.php">Ainda não possui cadastro? Clique aqui.</a>
                        </form>
                    </div>
                </section>
                <section class="cadastro">
                    <div class="imagem"></div>
                </section>
            </main>
            <br/>
        </div>
        <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>
            </body>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
                integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <footer id="rodape">

            <h3 id="forma_pagamento">Formas de pagamento</h3>
            <img id="formaPagamento" src="./imagens/formas-pagamento.jpeg" alt="Formas de pagamento"
            title="Visa, Mastercard, Hipercard, Elo,  Diners Club, American Express">

            <br> <br> <br> <br>

            <p class="direitos_autorais"> 2020 &copy; Recode Pro - Todos os Direitos Reservados</p>
        </footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>

<script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>

<script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </body>
    
</html>

<?php
// Se não existir um valor no índice 'nome', então encerre a aplicação
if (!isset($_SESSION['idusuario'])) {   
    exit;
}
?>