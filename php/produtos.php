<?php
    require "../Connection.php"; 
    
    $conn = new Connection;
    $conn->getDb();
?>
<!-- verificar por que não funciona sem ../ e notificar uso diferente em outras páginas-->

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
  <body >
    <?php
    include_once('../includes/menuIndex.php');   
    ?>

    <header class="container-md" class="tema">
      <h2>Produtos</h2>

      <section class="pesquisaProd" class="login">      
        <form action="./produtos.php" method="post">
          <input  type="text" name="pesquise" placeholder=" Pesquise o produto  ">
          <button class="pesquisaPro" id="button_cadastrar" type="submit"><b>Pesquisar</b></button>           
        </form>
      </section>
      
      <hr/>
    </header>

    <main class="categoria ">
      <section>
        <br/>
        <h4> Categoria </h4>
        <br/>
        <ul>
          <li onclick="exibir_todos()"> Todos (12) </li>
          <li onclick="exibir_descricao('geladeira')"> Geladeiras (3) </li>
          <li onclick="exibir_descricao('fogao')"> Fogões (2) </li>
          <li onclick="exibir_descricao('microondas')"> Microondas (3) </li>
          <li onclick="exibir_descricao('lavaRoupa')"> Lavadoura de roupa (2) </li>
          <li onclick="exibir_descricao('lavaLouca')"> Lava-louças (2) </li>
        </ul>
      </section> 
    </main>
    <section class="todosProdutos"> 

      <?php
      $sql = "SELECT * FROM produtos";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) { 
      while ($rows = $result->fetch_assoc()) {
      ?>

      <div class="box-produto" id="<?php echo $rows["descricao"]; ?>" style = "display: inline-block;">
          <img class="imagem" id="imagem" src="../<?php echo $rows["imagem"]; ?>" alt="<?php echo $rows["nomeimagem"]; ?> " class="imagem" id="imagem" width="150px" onmouseover="visualiza_imag(this)" onmouseout="esconde_imag(this)" onclick="exibir_descricao_imag(this);"/> 
        
          <p class="descricao"> <?php echo $rows['descricao']; ?> </p>
        
          <p class="descricao">De: <strike>R$ <?php echo $rows["preco"];?></strike></p>
          <p class="preco">Por: R$ <?php echo $rows["precofinal"];?></p><br>
        
      </div>
      <?php
        }
        ?>

      <?php
      }
       else {
      echo "Nenhum produto encontrado!";
      }
      ?> 

           
      ?>
    </section>

    <?php 
    include_once("../includes/rodape.php");
    ?>
  </body>


</html>