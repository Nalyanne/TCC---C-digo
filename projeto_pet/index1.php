<?php session_start();
$nome = $_SESSION['user'];
?>

<html >
<title>Petshop</title>
<head>
<meta http-equiv="Content-Type" content="text/html;" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="estilo.css" />
<head>
<body>
    
<?PHP require 'configs/conexao.php'; ?>
    
<div id="tudo">
<div id="topo">
<P>
<!-- --><!-- -->
 tem um código aqui que retorna o usuário logado <BR>
<p>
    <?php
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
 huehueheuheu
<?php

?>
</div>
</div>
</body>
</html>