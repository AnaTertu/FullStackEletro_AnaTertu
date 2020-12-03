<?php
  include_once('../Connection.php');    
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
        <link rel="icon" href="../imagens/logo.jpeg">
        <link rel="stylesheet" href="../css/estilo.css">
        <script src="../js/script.js"></script>
        <title>Full Stack Eletro</title>
    </head>
    <body>
        <?php
            include_once('../includes/menuIndex.php');    
        ?>

        <form class="form-pedidos" action="./actions/pedidos.php" method="POST">
            <label for="nomecliente"> Nome </label>
                <input type="text" name="nomecliente" id="nomecliente">
            <label for="endereco">Endereço</label>
                <input type="text" name="endereco" id="endereco">
            <label for="fonecliente"> Telefone </label>
                <input type="text" name="fonecliente" id="fonecliente">
            <label for="nomeproduto"> Produto </label>
                <input type="text" name="nomeproduto" id="nomeproduto">
            <label for="valorunitario"> Valor Unitário </label>
                <input type="text" name="valorunitario" id="valorunitario">
            <label for="quantidade"> Quantidade </label>
                <input type="text" name="quantidade" id="quantidade">
            <label for="valortotal"> Valor Total </label>
                <input type="text" name="valortotal" id="valortotal">

            <button type="submit" name="Enviar" > Enviar Pedido </button>
            <p>Aguarde para ser direcionado para "Formas de Pagamento."</p>
            <p>Ótima escolha!</p>
        </form>

        <?php 
            include_once ("../includes/rodape.php");
        ?>
    </body>
</html>