<?php

//include Classe.php;

class Pessoa{
	private $nome;
	private $sobrenome;
	
	public function __construct($nome, $sobrenome){
		$this -> nome = $nome;
		$this -> sobrenome = $sobrenome;
	}
	
	public function getNomeCompleto(){
		echo $this -> nome, ' ', $this->sobrenome.PHP_EOL;
	}
	
	public function __destruct(){
		echo 'Destruindo...';
	}
}

$Pessoa01 = new Pessoa('Jorge', 'Miranda');

$Pessoa01 -> getNomeCompleto();

unset ($Pessoa01);

?>