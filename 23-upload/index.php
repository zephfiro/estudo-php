<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>é o sobes</title>
</head>
<body>

<?php 
/*$mensagem = '';
if(isset($_POST['enviarArquivo'])){
	$formatosPermitidos = array("png","jpeg", "jpg", "gif");
	$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
	if (in_array($extensao, $formatosPermitidos)) {
		$pasta = "arquivos/";
		$temp = $_FILES['arquivo']['tmp_name'];
		$novoNome = uniqid()."."."$extensao";

		if (move_uploaded_file($temp, $pasta.$novoNome)) {
			$mensagem = "upload feito com sucesso";
		}else{
			$mensagem = "ERROR - nao foi possivel realizar o upload";
		}
	}else{
		$mensagem = "formatoInvalido";
	}
}
echo $mensagem;*/
if (isset($_POST['enviarArquivo'])) {
	
}

?>



	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
		<input type="file" name="arquivo[]" multiple><br>
		<input type="submit" name="enviarArquivo">
	</form>
	

</body>
</html>