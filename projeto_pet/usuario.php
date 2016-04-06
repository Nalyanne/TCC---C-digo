<?php session_start();
$nome = $_SESSION['user'];
?>

<html>
  <title>Petshop</title>
<head>
<meta http-equiv="Content-Type" content="text/html;" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="estilo.css" />
<head>
<body>
<?PHP require 'configs/conexao.php' ;
    
?>
<div id="tudo">
<div id="topo">
<P>
<!-- --><!-- -->
 tem um código aqui que retorna o usuário logado <BR>
<p><?php

date_default_timezone_set('America/Sao_Paulo');
$dataHora = date ('d/m/Y H:i:s');
echo $dataHora;

?>
<form method="Post" action="index.php" />
<p><input type="submit" value="Sair" />
<div id="foto">
    <a href="index1.php"><img src="imagens/foto3.jpg"  /></a>
</div>
</div>
<div id="menu">
<table width="100%" height="52" border="0" align="center" cellpadding="1" cellspacing="1">
    <tr>
      <td><p><a href="#">Clientes</a></p></td>
      <td><a href="#">Animais</a></td>
      <td><a href="#">Atendimentos</a></td>
	  <td><a href="#">Agenda</a></td>
          <td><a href="usuario.php">Usuários</a></td>
    </tr>
  </table>
</div>
<div id="corpo">
<p> Aqui vem informações dos usuarios, caixa de texto que são preenchidas automaticamente.</p>

<table>
   
    
    <p> <td> <input type="button" value="Incluir" /> </td>
        <td> <input type="button" value="Consultar" /> </td>
        <td> <input type="button" value="Alterar" /> </td>
        <td> <input type="button" value="Delete" /> </td>
    </p>
    
</table>

<hr color="gray" height="50%" align="center" />
<?php    
$consulta = $pdo->query("SELECT login FROM tb_usuario;");

while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    // aqui eu mostro os valores de minha consulta
    echo "Nome: {$linha['login']}<br />";
}
?>

</div>
</div>
</body>
 
</html>