<?php
	$titulo = "Cadastro";
?>
<html>
	<head>
		<title> <?php echo titulo; ?></title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<h1>Cadastro</h1>
		<form method="post" action="cadastro.php">
			<label> E-mail</label>
			<input type="text" name="email" id="email"/>
			</br>
			<input type="submit" value="Cadastrar" name="email" id="email"/>
		</form>
		<?php 
			if($_POST && !empty($_POST ['email'])){
				echo "Cadastro com sucesso";
			} ?>
	</body>
</html>