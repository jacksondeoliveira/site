<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$banco = 'site';
	$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
	$sql = mysql_select_db($banco) or die(mysql_error());
?>
<!DOCTYPE html>
<html>
<head>
	<title>Entrando...</title>
	<script type="text/javascript">
		function loginsuccessfully(){
			setTimeout("window.location='inicio.php'",1000);

		}
		function loginfailed(){
			setTimeout("window.location='index.php'",1000);
		}
	</script>
</head>

<body>
<?php
		$numerom = $_POST['numerom'];
		$sql = mysql_query("SELECT * FROM usuarios WHERE numerom = '$numerom'") or die(mysql_error());

		$row = mysql_num_rows($sql);

		if ($row > 0) {
			session_start();
			$_SESSION['numerom'] = $_POST['numerom'];
		echo "<script>loginsuccessfully()</script>";
		echo "<center><h1>ENTRANDO...</h1></center>";
	}else{
			echo "<script>loginfailed()</script>";
			echo "<center><h1>erro tente novamente...</h1></center>";
	}
	
?>
</body>
</html>