<?php
$lista[] = ["nome" => "Jonata"];
$lista[] = ["nome" => "Jo�o"];
$lista[] = ["nome" => "Carlos"];

$json = json_encode($lista);

$lista2[] = json_decode($json);

echo $lista[2]['nome'];

?>