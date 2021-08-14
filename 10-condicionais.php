<?php
$numero = 10;

if ($numero == 10):
	echo "é 10";
elseif($numero <= 9):
	echo "é menor ou igual a 9";
else:
	echo "é diferente de 10";
endif;

echo "<hr>";

$media = 7;

echo ($media >= 7) ? "aprovado" : "reprovado";
echo "<hr>";


$cor = "vermelho";

switch ($cor) {
	case 'vermelho':
		echo "sua cor favorita é vermelho";
		break;
	case 'verde':
		echo "sua cor favorita é verde";
		break;
	case 'azul':
		echo "sua cor favorita é azul";
		break;
	default:
		echo "voce nao tem cor favorita";
		break;
}