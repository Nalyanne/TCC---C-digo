<html >
<title>Petshop</title>
<head>
<meta http-equiv="Content-Type" content="text/html;" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="estilo.css" />
<head>
<body>
<?PHP include 'conexao.php' ?>
<div id="tudo">
<div id="topo">
<P>
<!-- --><?php $userlogado = session_start(); ?><!-- -->
 tem um código aqui que retorna o usuário logado <BR>
<p><?php 
date_default_timezone_set('America/Sao_Paulo');
$data = date ('d/m/Y');
$hora = date ('H:i:s');
echo "$data, $hora";

?>
 <p><input type="submit" value="Sair" />
<div id="foto">
<img src="imagens/foto3.jpg"  />
</div>
</div>
<div id="menu">
<table width="100%" height="52" border="0" align="center" cellpadding="1" cellspacing="1">
    <tr>
      <td><p><a href="#">Clientes</a></p></td>
      <td><a href="#">Animais</a></td>
      <td><a href="#">Atendimentos</a></td>
	  <td><a href="#">Agenda</a></td>
    </tr>
  </table>
</div>
<div id="corpo">
<p>no no no no </p>
<?php

?>
</div>
</div>
</body>
</html>