<?php
  include_once('../Connection.php');    
?>

<?php
if (isset($_POST['nome']) && isset($_POST['mensagem'])) {
  $nome = $_POST['nome'];
  $msg = $_POST['mensagem'];

  $sql = "insert into comentarios (nome, mensagem) VALUES ('$nome','$mensagem')";
  $result = $conn->query($sql);

  header("Location: contato.php");
}
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
        <script src="../js/script.js">
        function fatorial($numero){
      return $numero * fatorial($numero);
    return 1;
}
echo fatorial(8);
        </script>
        <title>Full Stack Eletro</title>
    </head>
    <body class="d-flex flex-column" style="min-height: 100vh">
        <?php
            include_once('../includes/menuIndex.php');    
        ?>

        <br/>
        <header class="container-md" class="tema">
            <h2>Contatos</h2>
            <p class="text-info"> Aguardamos seu contato : ) </p>
        </header>
        <hr>
        <br/>
        <table id="contato">
            <tr>
                <td>
                    <img src="../imagens/email.png" alt="e-mail:" width="40px">
                    <font face="Arial" size="4"> contato@fullstackeletro.com</font>
                </td>
                <td>
                    <img src="../imagens/whatsapp.png" alt="whatsapp:" width="60px">
                    <font face="Arial" size="4"> (011) 9999-9999 </font>
                </td>
            </tr>
        </table>
        
        <form class="container">
        
           
            <h3>Nome: </h3>
            <input type="text" class="nome_Usuario">
            <?php require "./actions/User.php"?>
            <h3>Telefone: </h3>
            <input type="text" class="nome_Usuario">
            <br/>
            <br/>
            <h3>Mensagem: </h3>
            <textarea class="msn_Usuario">Digite aqui....</textarea>

            <input type="submit" vale="Enviar" class="botaoContato"/>
        </form>
        

        
        <?php 
            include_once ("../includes/rodape.php");
        ?>
         
    </body>
</html>
