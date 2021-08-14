<?php

for($i = 0; $i <=10; $i++){
	echo "o count esta em $i<br>";
}
echo "<hr>";
$pokemons = array("pikachu","eevee","lapras");

foreach ($pokemons as $indice => $valor) {
	echo $indice." ".$valor."<br>";
}