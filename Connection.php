<?php
    
class Connection
{
    public function getDb()
    {
        $conn = new PDO(
            "mysql: host=localhost;dbneme=fullstackeletro;charset=utf8",
            "root",
            ""
        );

        if ($conn) {
            return "<h4>Conexão ok</h4>";
        } else {
            return "<h4> Erro ao realizar conexão </h4>";
        }        
    }
}

$conn = new Connection;
echo $conn->getDb();

//$servername = "localhost";
    //$username = "root";
    //$password = "";
    //$database = "fullstackeletro";
    
    //conexão com BD
    //$connection = mysqli_connect($servername, $username, $password, $database);

    //if(!$connection){
    //    die("A conexão falhou " . mysqli_connect_error());
    //}