<?php
session_start();

// Se não existir um valor no índice 'nome', então encerre a aplicação
if (!isset($_SESSION['id'])) {
    header('location: ../index.php');
    exit;
} else {

    $conn = mysqli_connect("localhost", "root", "", "fullstackeletro");

    $postagens = $conn->query("SELECT * FROM postagens JOIN usuarios WHERE fk_usuario = id ORDER BY id_postagens DESC");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/home.css">
</head>

<body>
    <!-- Cabeçalho -->
    <?php
        include_once('./actions/menuIndex.php');    
    ?>

    <header class="container-fluid border shadow">
        <nav class="row container m-auto">
            <div class="col-10 d-flex align-items-center">
                <img class="rounded-circle" src="<?php echo $_SESSION['imagem'] ?>" alt="<?php echo $_SESSION['nome'] ?>">
                <h5 class="ml-3 mb-0"><?php echo $_SESSION['nome'] ?></h5>
            </div>

            <div class="col-2 d-flex align-items-center justify-content-end">
                <div class="dropdown">
                    <button class="btn text-white rounded-circle dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </button>
                    <div class="dropdown-menu py-0" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item py-2" href="perfil.php">Meu perfil</a>
                        <a class="dropdown-item py-2" href="./sair.php">Sair</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Conteúdo -->
    <main class="container">
        <form class="form-row mt-5" action="cadastro_postagens.php" method="post">
            <input class="col-9 form-control pl-3" type="text" name="post" placeholder="No que você está pensando, <?php echo $_SESSION['nome'] ?>?">
            <button class="col-3 btn" type="submit">Publicar</button>
        </form>

        <?php
        foreach ($postagens as $postagem) {
        ?>

        <div class="card mt-5">
            <div class="card-header">
                <img class="rounded-circle" src="<?php echo $postagem["imagem"] ?>" alt="<?php echo $postagem['nome'] ?>">
                <h5 class="ml-3 mb-0"><?php echo $postagem['nome'] ?></h5>
            </div>
            <div class="card-body">
                <?php echo $postagem["conteudo"] ?>
            </div>
        </div>

        <?php  } ?>




    </main>

  
</body>

</html>