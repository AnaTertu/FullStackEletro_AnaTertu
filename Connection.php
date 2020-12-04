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
            return "<h1> Erro ao realizar conexão </h1>";
        }        
    }
}

