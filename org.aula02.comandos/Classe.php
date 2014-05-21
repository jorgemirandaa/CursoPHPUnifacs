<?php
class MinhaClasse {
	public $atributoPublico = 'Publico';
	protected $atributoprotegido = 'Protegido';
	private $atributoPrivado = 'Privado';
	public function metodoQualquer() {
		echo $this -> atributoPublico;
		echo $this -> atributoprotegido;
		echo $this -> atributoPrivado;
	}
}

$Objeto = new MinhaClasse();
echo $Objeto -> atributoPublico;
echo $Objeto -> metodoQualquer();



?>