<?php

require "Connection.php";

class People
{
    public $id;
    public $names;
    public $phones;
    public $posts;

    public static function getAll()
    {
        //$conn = new Connection;
        //$connection = $conn->getDb();
        $connection = Connection::getDb(); //só funciona com métodos estáticos

        $stmt = $connection->query("SELECT * FROM people");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } //no lugar de sql - stmt boa prática - buscar definição
}
    