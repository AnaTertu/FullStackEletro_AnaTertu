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


session_start();

$email = $_POST['email']; 
$senha = $_POST['senha'];


if (isset($email) > 3 && isset($senha) > 3) {
    $senha_cripto = md5($senha);

    $conn = mysqli_connect("localhost", "root", "", "fullstackeletro");

    if(isset($_POST['usuario'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "INSERT INTO pedidos VALUES(null, '$email', '$senha');";

        mysqli_query($conn, $sql);

        header("Location: ../index.php");

    }