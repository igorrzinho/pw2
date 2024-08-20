<?php
	include 'conexao.php';
	$usuario = $_POST["txt_usuario"];
	$email = $_POST["txt_email"];
	$senha = $_POST["txt_senha"];
	$sql = mysql_query("SELECT * FROM db_cadastro WHERE  usuario='$usuario' OR email = '$email");
	if (mysql_num_rows($sql)>0) {
		echo "<center>";
		echo "<hr>";
		echo "conta ja existe";
		echo "<hr>";
		echo "<br>";
	} else {
		$sql = mysql_query("INSERT INTO db_cadastro (usuario, email, senha) VALUES ('$usuario', '$email', '$senha')");
		echo "<center>";
		echo "<hr>";
		echo "conta criada";
		echo "<hr>";
		echo "<br>";
	}
?>