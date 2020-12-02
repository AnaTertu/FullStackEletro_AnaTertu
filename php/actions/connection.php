<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fullstackeletro";
    
    //conexão com BD
    $connection = mysqli_connect($servername, $username, $password, $database);

    if(!$connection){
        die("A conexão falhou " . mysqli_connect_error());
    }
?>   