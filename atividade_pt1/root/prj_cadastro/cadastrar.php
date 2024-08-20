<?php
include 'conexao.php';
$nome = $_POST["txt_nome"];
$data_ad = $_POST["txt_data"];
$cargo = $_POST["txt_cargo"];
$qtd_sal = $_POST["txt_sal"];
$sal_bruto = $qtd_sal * 1412;
if ($sal_bruto > 1550) {
	$inss = $sal_bruto * 0.11;
	$sal_liq = $sal_bruto - $inss;
} else {
	$inss = 0;
	$sal_liq	= $sal_bruto;
}

$sql = mysql_query("SELECT * FROM funcionarios WHERE  Nome='$nome'");
if (mysql_num_rows($sql) > 0) {
	echo "<center>";
	echo "<hr>";
	echo "Funcionario ja existe";
	echo "<hr>";
	echo "<br>";
} else {
	$sql = mysql_query("INSERT INTO funcionarios (Nome, Data_Ad, Cargo,qtd_salarios, salario_liquido, salario_bruto, INSS) VALUES ('$nome', '$data_ad', '$cargo',$qtd_sal,$sal_liq,$sal_bruto,$inss)");
	echo "<center>";
	echo "<hr>";
	echo "Funcionario Adicionado";
	echo "<hr>";
	echo "<br>";
}
