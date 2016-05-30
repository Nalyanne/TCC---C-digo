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
<BR>
<p>
    <?php
    echo $nome['login'];
	echo ", Bem vindo<br>";
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
      <td><a href="clientes.php" class="but">Clientes</a></td>
      <td><a href="animais.php" class="but">Animais</a></td>
      <td><a href="atendimentos.php" class="but">Atendimentos</a></td>
	  <td><a href="agenda.php" class="but">Agenda</a></td>
	  <td><a href="funcionarios.php" class="but">Funcionários</a></td>
	  <td><a href="relatorios.php" class="but">Relatórios</a></td>
      <td><a href="usuario.php" class="but">Usuários</a></td>
    </tr>
  </table>
</div>
<div id="corpo">
<p>LALALALA
<p> aqui vai as opções de relatórios<br>

</div>
</div>
</body>
</html>