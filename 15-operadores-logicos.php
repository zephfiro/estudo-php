<?php

$idade = 21;
$nome = "Ricas";

if (($idade == 21) and ($nome) == "Ricas") {
	echo "verdadeiro";
}else{
	echo "falso";
}

echo "<br>";

if (($idade == 22) or ($nome) == "Ricas") {
	echo "verdadeiro";
}else{
	echo "falso";
}

echo "<br>";

if (($idade == 22) xor ($nome) == "Ricas") {
	echo "verdadeiro";
}else{
	echo "falso";
}

echo "<br>";

if (!($idade == 22) and ($nome) == "Ricas") {
	echo "verdadeiro";
}else{
	echo "falso";
}

echo "<br>";