<?php
	$a = 60;
	$b = 60;
	
	///Exemplo de if / else / elseif
	/*
	if ($a == $b){
		echo '$a e $b são iguais';
	} elseif ($a > $b){
		echo  '$a é maior que $b';
	} else{
		echo '$a é menor que $b';
	} */
	
	
	// Linha em For
	/* for ($i = 0; $i <= 100; $i++){
		echo $i.PHP_EOL;
	} */
	
	//Array
	/*
	$clientes[3] = ['nome' => 'John Doe'];
	$clientes[2] = ['nome' => 'John Doe'];
	$clientes[1] = ['nome' => 'John Doe'];
	
	foreach ($clientes as $chave => $cliente)
		echo "cliente {$chave}: {$cliente['nome']}" . PHP_EOL;
	
	// include retorna um erro "warning" e nao para a execução do programa
	// require retorna um fatal error e pára a execução do programa;
	/* require 'arquivo01.php';
	echo dobrar (4);
	echo $texto;
	*/
	
	//Lambda
	/*
	$input = array(1,2,3,4,5,6);
	//Criar função anônima
	$filtroNumeroPar = function($item){
		return ($item % 2 == 0);
	};
	//Função do PHP array_filter
	$output = array_filter($input, $filtroNumeroPar);
	print_r($output); */
	/*
	// Closure
	function criteria_greater_than($min){
		return function ($x) use ($min){
			return $x > $min;
		};
	}
	
	$input = array(1,2,3,4,5,6,7,8,9,10);
	
	//Use array_filter on a input with a selected filter function
	$output = array_filter($input, criteria_greater_than(3));
	
	print_r($output); //items > 3
	*/
	
	?>