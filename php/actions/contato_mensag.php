<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
</head>

<body>
<?php

class Pessoa{
    public $nome;
    public $fone;
    public $mensagem;

    public function getNome() {
        return $this -> nome;
    }

    public function getFone(){
        return $this -> fone;
    }

    public function getMensagem(){
        return $this -> mensagem;
    }
}

$pessoa = new Pessoa;
$pessoa -> nome = "Ana";

$pessoa2 = new Pessoa;
$pessoa2 -> nome = "Guilherme";

echo $pessoa -> nome;
echo "<br/>";
echo $pessoa2 -> nome;
</body>

</html>