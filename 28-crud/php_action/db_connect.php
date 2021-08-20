<?php
//conexao com bd
$serverName = 'localhost';
$username = 'root';
$password = '';
$db_name = 'crud';

$connect = mysqli_connect($serverName, $username, $password, $db_name);
mysqli_set_charset($connect, "utf-8");
if(mysqli_connect_error()){
	echo 'erro na conexao '.mysqli_connect_error();
}