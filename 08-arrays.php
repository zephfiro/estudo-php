<?php
//arrays numericos
$carros = array("BMW","Hilux","Camaro");
$carros[] = "Amarok";
print_r($carros);
echo'<br>';
echo $carros[0];
echo'<br>';

$motos = array();
$motos[] = "Vespa";
print_r($motos);
echo'<br>';
echo $motos[0];
echo'<br>';

$clientes = ["Rodrigo","Felipe","Bia"];
print_r($clientes);

//count
echo "clientes contem ".count($clientes)." variaveis";
echo "<hr>";

//foreach
foreach ($clientes as $valor) {
	echo $valor."<br>";
}
echo "<hr>";

//arrays associativos
$pessoa = array("nome"=> "Ricardo","idade"=> 21, "altura"=> 1.8);
$pessoa[cidade] = "Fortaleza";
echo $pessoa[idade];
print_r($pessoa);

foreach ($pessoa as $indice => $valor) {
	echo $indice.":".$valor."<br>";
}

//array multidimensional
$pokemons = array(
	"fogo" => array("basic"=>"Charmander","stage1"=>"Charmeleon","stage2"=>"Charizard"),
	"agua" => array("Squirtle","Warturtle","Blastoise")
);
echo $pokemons[fogo][0];
echo "<br>";

foreach ($pokemons[fogo] as $indice => $valor) {
	echo $indice.":".$valor."<br>";
}