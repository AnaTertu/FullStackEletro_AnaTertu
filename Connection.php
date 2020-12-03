<?php
    //$servername = "localhost";
    //$username = "root";
    //$password = "";
    //$database = "fullstackeletro";
    
    //conexão com BD
    //$connection = mysqli_connect($servername, $username, $password, $database);

    //if(!$connection){
    //    die("A conexão falhou " . mysqli_connect_error());
    //}


class Connection
{
    public function getDB()
    {
        $conn = new PDO(
            "mysql: host=localhost;dbneme=fullstackeletro;charset=utf8",
            "root",
            ""
        );

        if ($conn) {
            return $conn;
        } else {
            return "<h1> Erro ao realizar conexão </h1>";
        }
        
    }
}
