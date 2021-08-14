<?php

$nome = "Ricas Alves";
$a = 1;
$b = 3;
$c = 7;

function exibirNome(){
	global $nome;
	echo $nome;
}

exibirNome();
echo '<hr>';


function exibirCidade(){
	global $cidade;
	$cidade = "Fortaleza";
}

exibirCidade();
echo $cidade;
echo'<hr>';

function soma(){
	echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();