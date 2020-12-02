<?php

class Pessoa{
    public $nome;

    public function getNome() {
        return $this->$nome;
    }

    public function getIdade(){
        return $this-> $idade;
    }
}

$pessoa = new Pessoa;
$pessoa->nome = "Ana";

$pessoa2 = new Pessoa;
$pessoa2 ->