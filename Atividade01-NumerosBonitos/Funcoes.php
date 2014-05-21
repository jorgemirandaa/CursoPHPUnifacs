<?php

// Funзгo para incrementar - Valor Final menos o inicial e os nъmeros compreendidos entre Inicio e Fim.
function incrementar_Array($item1, $inicio, $fim) {
	for(; $inicio <= $fim; $inicio ++) {
		$item1 [] = $inicio;
	}
	return $item1;
}

// Funзгo para retornar os nъmeros que possuem 4 em sua estrutura
function contemQuatro($item1) {
	if ((substr ( $item1, 0 )) == 4) {
		return $item1;
		break;
	} else if ((substr ( $item1, 1 )) == 4){
		return $item1;
		break;
	} else if ((substr ( $item1, 2 )) == 4){
		return $item1;
		break;
	} else if ((substr ( $item1, 3 )) == 4){
		return $item1;
		break;
	} else if ((substr ( $item1, 4 )) == 4){
		return $item1;
		break;
	}
}

?>