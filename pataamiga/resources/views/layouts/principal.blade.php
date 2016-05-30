<html >

<head>
<title>Petshop</title>
<meta http-equiv="Content-Type" content="text/html;" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo asset('css/estilo.css') ;?>" />
<head>
<body>
    
<div id="tudo">
<div id="topo">
<P>
<!-- --><!-- -->
<BR>
<p>
       
<form method="Post" action="index.php" />
<p><input type="submit" value="Sair" />
<div id="foto">
<a href="/"><img src="imagens/foto3.jpg"  /></a>
</div>
</div>
<div id="menu">
 <table width="100%" height="52" border="0" align="center" cellpadding="1" cellspacing="1">
    <tr>
      <td><a href="/clientes" class="but">Clientes</a></td>
      <td><a href="/animais" class="but">Animais</a></td>
      <td><a href="/atendimentos" class="but">Atendimentos</a></td>
	  <td><a href="/agenda" class="but">Agenda</a></td>
	  <td><a href="/funcionarios" class="but">Funcionários</a></td>
	  <td><a href="/relatorios" class="but">Relatórios</a></td>
      <td><a href="/usuarios" class="but">Usuários</a></td>
    </tr>
  </table>
</div>
  <div id="corpo">
  @yield('content')
  <!--<p>Aqui deve ser entregue informações gerais sobre o sistema, ultimo cadastro de cliente/animal, atendimentos, e funcionário/usuário.</p>p -->
  </div>
</body>
</html>