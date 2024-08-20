<?php
    $servidor = "127.0.0.1";
    $usuario = "root";
    $senha = "usbw";
    $banco = "dsm_cadastro";
    //conectar com o banco de dados
    $conecta_db = mysql_connect($servidor, $usuario, $senha) or die(mysql_error());
    mysql_select_db($banco) or die("erro ao connectar");
?>