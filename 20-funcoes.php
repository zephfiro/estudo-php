<?php

function exibirNome($nome){
	echo "meu nome é $nome";
}

exibirNome("Ricas");

echo "<hr>";

function media($aluno,$n1,$n2){
	$media = ($n1 + $n2)/2;
	if ($media>=7) {
		echo "$aluno foi aprovado com media $media.";
	}else{
		echo "$aluno foi reprovado";
	}
}

media("Ricas",10,8);