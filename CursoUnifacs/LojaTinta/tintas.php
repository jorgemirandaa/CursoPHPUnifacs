<?php
	function fatura($request){
		$area = $request['area'];
		$litros = ceil($area/3);
		$latas = ceil($litros/18);
		$custo = number_format(($latas * 80.0), 2, ',', '.');
		printf('Quantidade de latas: %s Custo Total: R$ %s', $latas, $custo);
	}
	
	fatura($_REQUEST);
?>