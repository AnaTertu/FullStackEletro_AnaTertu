<?php
session_start();



    require_once "./connection.php"

    if(isset($_POST['usuario'])){
        $nomecliente = POST['nomecliente'];
        $endereco = POST['endereco'];
        $fonecliente = POST['fonecliente']; 
        $nomeproduto = POST['nomeproduto']; 
        $valorunitario = POST['valorunitario']; 
        $quantidade = POST['quantidade']; 
        $valortotal = POST['valortotal'];

        $sql = "INSERT INTO pedidos VALUES (null, '$nomecliente', '$endereco', '$fonecliente', '$nomeproduto', '$valorunitario', '$quantidade', '$valortotal')" 

        mysqli_query($connect, $sql);

        header("Location: ../index.php");
    }

    class 

?>














<!--
if(isset($_POST['nomecliente']) && isset($_POST['endereco']) && isset($_POST['fonecliente']) && isset($_POST['nomeproduto']) && isset($_POST['valorunitario']) && isset($_POST['quantidade']) && isset($_POST['valortotal'])) {
                $nomecliente = $_POST['nomecliente'];
                $endereco = $_POST['endereco'];
                $fonecliente = $_POST['fonecliente'];
                $nomeproduto = $_POST['nomeproduto'];
                $valorunitario = $_POST['valorunitario'];
                $quantidade = $_POST['quantidade'];
                $valortotal = $_POST['valortotal'];

                //echo 
                $sql = "insert into comentarios (nomecliente, endereco, fonecliente, nomeproduto, valorunitario, quantidade, valortotal)
            
                values ('$nomecliente', '$endereco', '$fonecliente', '$nomeproduto', '$valorunitario', '$quantidade', '$valortotal')";
                
                 $result = $conn->query($sql);
            }
            <form method="POST" action="../sql/fseletro_bd.sql">
            <input name="nomecliente" type="text" placeholder="nomecliente"/>;
            <input name="endereco" type="text" placeholder="endereco"/>
            <input name="fonecliente" type="text" placeholder="fonecliente"/>
            <input name="nomeproduto" type="text" placeholder="nomeproduto"/>
            <input name="valorunitario" type="text" placeholder="valorunitario"/>
            <input name="quantidade" type="text" placeholder="quantidade"/>
            <input name="valortotal" type="text" placeholder="valortotal"/>

            <input type="submit"/>
        </form>

        
        /*
          //outra escrita de código
                if($conexao == false) {
                die("A conexão ao BD falhou");
                echo "erro"
                print_r($conexao);
            }

            $sql = "SELECT nomecliente, endereco, fonecliente, nomeproduto, valorunitario, quantidade, valortotal";
        
            while($row = $result->fetch_assoc()) {
                // print_r($row); //erro while, fetch_assoc - feito outras tentativas comentadas abaixo
            
                echo "<p> O cliente de nome: " . $row['nomecliente'] . ", com endereço: " . $row['endereco'] . ", seu telefone: " . $row['fonecliente'] . ", escolheu: " . $row['nomeproduto'] . ", de valor = R$" . $row['valorunitario'] . ", nesta quantidade: " . $row['quantidade'] . ", o qual resulta no pagamento total de R$" . $row['valortotal']  . "</p><hr/>";
                
            }
              
            


            //$result = $conn->query($sql);

            //print_r($result);

         //while ($row = $result->fetch_assoc()){
        //while ($row = mysqli_fetch_assoc($result)){
        //while ($row = mysqli_result::fetch_assoc()){

            // print_r($row);
            /*
            //ERRO if , while
            if ($result = $mysqli->query($query)) {

                while ($row = $result->fetch_assoc()) {
                    printf ("%s (%s)\n", $row["nomecliente"], $row["endereco"], $row["fonecliente"], $row["nomeproduto"], $row["valorunitario"],$row["quantidade"], $row["valortotal"]);
                }

                $result->close();
            }

            $mysqli->close();
            */
            /*
            //ERRO if e última linha
             $query = "select nomecliente, endereco, fonecliente, nomeproduto, valorunitario, quantidade, valortotal";

            if ($result = mysqli_fetch_assoc($result)) {

                while ($row = mysqli_fetch_assoc ($result)) {
                    printf ("%s (%s)\n", $row["nomecliente"], $row["endereco"], $row["fonecliente"], $row["nomeproduto"], $row["valorunitario"],$row["quantidade"], $row["valortotal"]);
                }

                mysqli_free_result($result);
            }

            mysqli_close($link);

            */
            -->    