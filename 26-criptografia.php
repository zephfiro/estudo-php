<?php

/*//base64
$senha = 123456;

$novaSenha = base64_encode($senha);
echo 'base64: '.$novaSenha;

echo "<br>";

$decodeSenha = base64_decode($novaSenha);
echo $decodeSenha;

echo "<br>";

echo 'md5: '.md5($senha);

echo "<br>";

echo 'sha1: '.sha1($senha);*/

$senhaDb = '$2y$10$OMx.USEZATEmaniNYopi0.hTN7yFypbPFlNUK6yxb4rK55ASD6LHK';
$senha = '123456';

if(password_verify($senha, $senhaDb)){
	echo 'senha valida<br>';
}else{
	echo 'senha invalida';
}