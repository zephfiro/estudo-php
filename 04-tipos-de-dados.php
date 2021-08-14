<?php
// ESCALARES
//string
$nome = "123";
var_dump($nome);
if(is_string($nome)):
	echo "é uma string";
else:
	echo "não é string";
endif;
echo "<hr>";

//int
$idade = 21;
var_dump($idade);
if(is_int($idade)):
	echo "é um inteiro";
else:
	echo "não é inteiro";
endif;
echo "<hr>";

//float
$altura = 1.8;
var_dump($altura);
if(is_float($altura)):
	echo "é um inteiro";
else:
	echo "não é inteiro";
endif;
echo "<hr>";

//boolean
$admin = false;
var_dump($admin);
if(is_bool($admin)):
	echo "é um bool";
else:
	echo "não é bool";
endif;
echo "<hr>";

//COMPOSTO
//array
$carros = array("gol","uno","camaro",12,20.6,true);
var_dump($carros);
echo "<hr>";

//object
class Cliente {
	public $nome;
	public function setNome($nome){
		$this->$nome = $nome;
	}
}

$cliente = new Cliente();
$cliente->setNome("Ricas");
var_dump($cliente);
echo "<hr>";

//ESPECIAL
//null
$cidade = null;
var_dump($cidade);
echo "<hr>";

//resource