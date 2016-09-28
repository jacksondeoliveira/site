<?php
		$hots = "localhost";
		$user = "root";
		$pass = "";
		$banco = "cadastro";
		$canexao = mysql_connect($hots, $user, $pass) or die(mysql_error());
		mysql_select_db($banco) or die(mysql_error());
?>
<?php
	session_start();
	if(!isset($_SESSION["numerom"]) || !isset($_SESSION["senha"])) {
		header("location: index.php");
		exit;
	}
?>
<html>

<head>
<title>INICIO</title>
</head>

<body>
<a href="saida.php">sair</a>
<center><h1>INICIO DO SITE</h1></center>
</body>

</html>