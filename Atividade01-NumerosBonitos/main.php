<?php
include "/Funcoes.php";

$inicial = 899;
$final = 999;
$numeros = array ();

$numeros = incrementar_Array ( $numeros, $inicial, $final );

print_r ( $numeros );
print_r ( contemQuatro ( $numeros ) );

$numeros_bonitos = function ($item1) {
	// Após receber o array que possue os números que têm 4, aqui deveria ser a parte que removeria os números que possuem 4 e que possuem 9;
	
		if ((substr ( (contemQuatro ( $item1 )), 0 )) == 9) {
			break;
		} else if ((substr ( (contemQuatro ( $item1 )), 1 )) == 9) {
			
			break;
		} else if ((substr ( (contemQuatro ( $item1 )), 2 )) == 9) {
			
			break;
		} else if ((substr ( (contemQuatro ( $item1 )), 3 )) == 9) {
			
			break;
		} else if ((substr ( (contemQuatro ( $item1 )), 4 )) == 9) {
			
			break;
		} else {
			return (contemQuatro ( $item1 ));
			
		}
};

$output = array_filter ( $numeros, $numeros_bonitos );

print_r ( $output );
?>