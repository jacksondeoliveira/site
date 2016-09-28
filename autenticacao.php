<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "cadastro";
	$canexao = mysql_connect($host, $user, $pass) or die(mysql_error());
	$sql = mysql_select_db($banco) or die(mysql_error());
?>

<!DOCTYPE html>
<html>
	<head>
		<title>ENTRANDO...</title>
		<script type="text/javascript">
			function loginsuccessfully(){
				setTimeout("window.location='inicio.php'",5000)
			
			}function loginfailed(){
				setTimeout("window.location='index.php'",5000);
			}
		</script>
	</head>
	<body>
		<?php
		$numerom = $_POST['numerom'];
		$senha = $_POST['senha'];
		$sql = mysql_query("SELECT * FROM usuarios WHERE numerom = '$numerom' and senha = '$senha'") or die(mysql_error());
		$row = mysql_num_rows($sql);
		if ($row > 0) {
			session_start();
			$_SESSION['numerom'] = $_POST['numerom'];
			$_SESSION['senha'] = $_POST['senha'];
			echo "<script>loginsuccessfully()</script>";
			echo "<center><h1>ENTRANDO...</h1></center>";
		}else {
				echo"<center><h1>TENTE NOVAMENTE...AGUARDE...</h1></center>";
				echo"<script>loginfailed()</script";
			}	
	?>
	</body>
</html>