<?php
    require "../Connection.php"; 
    
    $conn = new Connection;
    $conn->getDb();
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


    <hr>
    <br/>
    <div class="container-md">
      <br> <br>
      <header class="tema">
        <h2> Nossas Lojas</h2>
      </header>
      <hr/>
      <br/> <br/>
    </div>
    <main class="loja">
      <div>
        <h3>São Paulo</h3>
        <ul>
          <li>Avenida Pixiguinha, 3297, São Paulo - SP</li>
          <li>Brás - Cep: 05198-350 </li>
          <li>(11) 2558-9875 </li>
        </ul>
      </div>
      <div>
        <h3>Rio de Janeiro</h3>
        <ul>
          <li>Avenida Bossa Nova, 2207, Rio de Janeiro - RJ </li>
          <li>Tijuca - Cep: 0753-015 </li>
          <li>(21) 3859-9812</li>
        </ul>
      </div>
      <div>
        <h3> Minas Gerais</h3>
        <ul>
          <li>Travessa Queijo Fino, 168, Minas Gerais - MG </li>
          <li>Lagoa - Cep: 0438-066</li>
          <li>(31) 4621-6712</li>
        </ul>
      </div>
    </main>

    <?php 
    include_once("../includes/rodape.php");
    ?>
  </body>
</html>