<?php

$nome = "ricas alves";
$novoNome = strtoupper($nome);
$nome = strtolower($novoNome);

echo $novoNome."<br>";
echo $nome.'<br>';

echo "<hr>";

$mensagem = "Olá mundo";
echo substr($mensagem, 5,4);

echo "<hr>";

$objeto = "teclado";
$novoObjeto = str_pad($objeto, 10, "*", STR_PAD_LEFT);
echo "$novoObjeto";

echo "<hr>";

$string = str_repeat("Sucesso<br>", 5);
echo $string;

echo strlen($mensagem);

echo "<hr>";

$texto = "o pokemon charizard é o melhor";
$novoTexto = str_replace("charizard", "Blastoise", $texto);
echo $novoTexto;

echo "<hr>";

echo strpos($texto,"é");