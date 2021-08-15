<?php 
//conexao
require_once 'db_connect.php';

//sessao
session_start();

//indentificador de envio de formulario
if (isset($_POST['buttonEntrar'])) {
	$erros = array();
	$login = mysqli_escape_string($connect, $_POST['login']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);

	if(empty($login) || empty($senha)){
		$erros[] = 'o campo login e senha precisam ser preenchidos';
	}else{
		$sql = "SELECT login FROM usuarios WHERE login = '$login'";
		$resultado = mysqli_query($connect, $sql);

		if(mysqli_num_rows($resultado) > 0){
			$senha = md5($senha);
			$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
			$resultado = mysqli_query($connect, $sql);
			if (mysqli_num_rows($resultado) == 1) {
				$dados = mysqli_fetch_array($resultado);
				mysqli_close($connect);
				$_SESSION['logado'] = true;
				$_SESSION['id_usuario'] = $dados['id'];
				header('Location: home.php');
			}else{
				$erros[] = 'usuario e senha nao conferem';
			}
		}else{
			$erros[]= 'Usuario inexistente';
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
</head>
<body>
	<h1>Login</h1>
	<?php
	if (!empty($erros)) {
		foreach ($erros as $erro) {
			echo "<li>".$erro."</li>";
		}
	}

	 ?>
	<hr>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		Login: <input type="text" name="login"><br>
		Senha: <input type="password" name="senha"><br>
		<button type="submit" name="buttonEntrar"> Entrar </button>
	</form>

</body>
</html>