<?php

class Contact{
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

$Contact = new Contact;
$Contact -> nome = "Ana";

$Contact2 = new Contact;
$Contact2 -> nome = "Guilherme";

echo $Contact -> nome;
echo "<br/>";
echo $Contact2 -> nome;

$fone = new Contact;
$fone -> fone = "3469-8561";

echo $fone -> fone;
