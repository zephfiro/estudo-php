<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "sistemalogin";

$connect = mysqli_connect($servername, $username, $password, $dbName);

if(mysqli_connect_error()){
	echo "falha na conexao".mysqli_connect_error();
}