
<html>

	<head>
		<title>cadastrando...</title>
	</head>

	<body>
		<?php
		$hots = "localhost";
		$user = "root";
		$pass = "";
		$banco = "cadastro";
		$canexao = mysql_connect($hots, $user, $pass) or die(mysql_error());
		mysql_select_db($banco) or die(mysql_error());
		?>
		<?php
		$numerom=$_POST['numerom'];
		$senha=$_POST['senha'];
		$sql = mysql_query("INSERT INTO usuarios(numerom, senha) VALUE('$numerom', '$senha')");
		echo "<center><h1>CADASTRO EFETUADO COM SUCESSO<h1/></center>";
		?>
		<form name="login" method="post" action="index.php">
			<input type="submit" value="Logar">
		</form>
	</body>

</html>