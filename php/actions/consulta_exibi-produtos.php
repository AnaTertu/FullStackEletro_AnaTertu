<?php

$nomeimagem = $_POST['nomeimagem'];
$descricao = $_POST['descricao'];


if (strlen($nomeimagem) > 3 && strlen($descricao) {;
    

    $conn = mysqli_connect("localhost", "root", "", "fullstackeletro");

    $sql = "SELECT produtos (nomeimagem, descricao) values ('$nomeimagem', '$descricao')";
    $conn->query($sql);

    echo "<script>
            alert('Produto selecionado!')
            window.location.href = '../produtos.php'
          </script>
         ";
}
else if (strlen($nomeimagem) <= 3) {
    echo "<script>
        alert('Digite um nome válido do catálogo para realizar a pesquisa!')
        window.location.href = '../produtos.php'
    </script>
    ";
}
else if (strlen($descricao) <= 3) {
    echo "<script>
        alert('Digite um produto válido do catálogo para realziar a pesquisa!')
        window.location.href = '../produtos.php'
    </script>
    ";
}