<?php
require_once("Pessoa.php");

$pessoa1 = new Pessoa("Iuri", 42);

echo $pessoa1->getNome();
$pessoa1->setNome(" Gagarin");
echo $pessoa1->getNome();
var_dump($pessoa1);

?>
