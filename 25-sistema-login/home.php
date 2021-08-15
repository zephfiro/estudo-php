<?php 
require_once'db_connect.php';
session_start();

//verificação
if(!isset($_SESSION['logado'])){
	header('Location: index.php');
}

$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
$mysqli_close($connect);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
</head>
<body>
	<h1>Home</h1><hr>
	<h3>Bem Vindo <?php echo $dados['nome']; ?>!</h3><br>
	<a href="logout.php">sair</a>
</body>
</html>