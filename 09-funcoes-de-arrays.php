<?php
$pokemons = array("eletrico"=>"pikachu","normal"=>"eevee","gelo"=>"lapras");
$pokemons2 = array("nidoqueen","nidoking");

//echo is_array($pokemons);

if(is_array($pokemons)):
	echo "é array";
else:
	echo "não é array";
endif;
echo "<hr>";


if (in_array("pikachu", $pokemons)):
	echo "existe no array";
else:
	echo "nao existe no array";
endif;
echo "<hr>";


$keys = array_keys($pokemons);
print_r($keys);
echo "<hr>";


$values = array_values($pokemons);
print_r($values);
echo "<hr>";


$pokemons3 = array_merge($pokemons, $pokemons2);
print_r($pokemons3);
echo "<hr>";


array_pop($pokemons3);
print_r($pokemons3);
echo "<hr>";


array_shift($pokemons3);
print_r($pokemons3);
echo "<hr>";


array_unshift($pokemons3,"pikachu");
print_r($pokemons3);
echo "<hr>";


array_push($pokemons3, "nidoking");
print_r($pokemons3);
echo "<hr>";


$keys = array("eletrico","normal","gelo","veneno","veneno2");
$pokemons4 = array_combine($keys, $pokemons3);
print_r($pokemons4);
echo "<hr>";


$soma = array(4,5,6);
echo array_sum($soma);
echo "<hr>";


$data = "10/08/2021";
$novaData = explode("/", $data);
print_r($novaData);
echo "<hr>";


$novaNovaData = implode("/", $novaData);
print_r($novaNovaData);