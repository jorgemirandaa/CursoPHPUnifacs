<?php

$input = '05. 17. 2014';
$dataInicial = DateTime::createFromFormat('m. d. Y', $input);
$dataFinal = clone $dataInicial;

$dataFinal -> add(new DateInterval('P7M14D')); // Adicona 7 meses e 14 dias;

$diff = $dataFinal -> diff($dataInicial);

print ('Diff: ' . $diff -> format('%m meses , %d dias (total: %a dias)' )) . PHP_EOL; 

echo 'Data anterior BR: ' . $dataInicial -> format('d/m/Y') . PHP_EOL;

echo 'Data Final: ' . $dataFinal -> format('d/m/Y');

?>