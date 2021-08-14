<html>
<body>

	<?php
	if (isset($_POST['enviarFormulario'])) {
	 	$erros = array();
	 	
	 	/*if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)){
	 		$erros[] = "Idade precisa ser inteiro";
	 	}
	 	if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
	 		$erros[] = "Idade precisa ser email";
	 	}
	 	if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)){
	 		$erros[] = "Idade precisa ser float";
	 	}
	 	if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)){
	 		$erros[] = "Idade precisa ser ip";
	 	}
	 	if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)){
	 		$erros[] = "Idade precisa ser url";
	 	}*/


	 	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

	 	$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
	 	if (filter_var($idade, FILTER_VALIDATE_INT)) {
	 		$erros[] = "idade precisa ser inteiro";
	 	}

	 	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	 	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	 		$erros[] = "email invalido";
	 	}

	 	$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);

	 	if (!empty($erros)) {
	 		foreach ($erros as $erro) {
	 			echo "<li> $erro </li>";
	 		}
	 	}else{
	 		echo 'Tudo certo';
	 	}

	 } 
	?>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		Nome: <input type="text" name="nome"><br>
		Idade: <input type="text" name="idade"><br>
		Email: <input type="text" name="email"><br>
		Url: <input type="text" name="url"><br>
		<button type="submit" name="enviarFormulario">Enviar</button>
	</form>



</body>
</html>