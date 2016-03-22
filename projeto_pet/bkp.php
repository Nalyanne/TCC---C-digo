<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// bkp do proessa login feito em modo estruturado.
?>
<?php
include 'conexao.php';
	
	if(isset ($_POST['login']) &&($_POST['senha'])){
	
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	//$logar = mysql_query ("SELECT * FROM tb_usuario WHERE login ='$login' AND senha ='$senha'") or die ("Erro ao selecionae");
	
	$logar = mysqli_query ('SELECT * FROM tb_usuario WHERE login ="$login" AND senha="$senha"') or die ('Erro ao selecionar');
	
	session_start();
	echo "Com acesso";
	$_SESSION ['login'] = $login;
	$_SESSION['senha'] = $senha;
	
	
	header("Location: index1.php");
	
	}else{
	
		echo "Dados incoretos, sem acesso. Tente novamente!";
		header("Location: index.php");
	}
?>