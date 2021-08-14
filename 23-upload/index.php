<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>é o sobes</title>
</head>
<body>

<?php
if(isset($_POST['enviarArquivo'])){
	$count = 0;
	$formatosPermitidos = array("png","jpeg", "jpg", "gif");
	$qntdDeArquivos = count($_FILES['arquivo']['name']);
	

	while ($count < $qntdDeArquivos) {
		$extensao = pathinfo($_FILES['arquivo']['name'][$count], PATHINFO_EXTENSION);
		if (in_array($extensao, $formatosPermitidos)) {
			$pasta = "arquivos/";
			$temp = $_FILES['arquivo']['tmp_name'][$count];
			$novoNome = uniqid()."."."$extensao";

			if (move_uploaded_file($temp, $pasta.$novoNome)) {
				echo "upload feito com sucesso para $pasta.$novoNome<br>";
			}else{
				echo 'erro ao enviar arquivo <br>';
			}
		}else{
			echo 'extensao nao permitida<br>';
		}
		$count++;
	}
	
}
?>



	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
		<input type="file" name="arquivo[]" multiple><br>
		<input type="submit" name="enviarArquivo">
	</form>
	

</body>
</html>