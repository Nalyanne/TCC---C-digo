<?php session_start();
$nome = $_SESSION['user'];
?>

<html >
<title>Petshop</title>
<head>
<meta http-equiv="Content-Type" content="text/html;" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../estilo.css" />
<head>
<body>
    
<?PHP require '../configs/conexao.php'; ?>
    
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
    
<form method="Post" action="../index.php" />
<p><input type="submit" value="Sair" />
<div id="foto">
<a href="../index1.php"><img src="../imagens/foto3.jpg"  /></a>
</div>
</div>
<div id="menu">
 <table width="100%" height="52" border="0" align="center" cellpadding="1" cellspacing="1">
    <tr>
      <td><a href="../clientes.php" class="but">Clientes</a></td>
      <td><a href="../animais.php" class="but">Animais</a></td>
      <td><a href="../atendimentos.php" class="but">Atendimentos</a></td>
	  <td><a href="../agenda.php" class="but">Agenda</a></td>
	  <td><a href="../funcionarios.php" class="but">Funcionários</a></td>
	  <td><a href="../relatorios.php" class="but">Relatórios</a></td>
      <td><a href="../usuario.php" class="but">Usuários</a></td>
    </tr>
  </table>
</div>
<div id="corpo">

<div id="crud">
    <a href="novo_atendimento.php" class="but">Cadastrar</a><br />
    <a href="pesquisar_atendimento.php" class="but">Pesquisar</a><br />
    <a href="alterar_atendimento.php" class="but">Alterar</a><br />
	<a href="atualizar_atendimento.php" class="but">Atualizar</a><br />
    <a href="cancelar_atendimento.php" class="but">Cancelar</a><br />
</div>
<div id='conteudo'>
<p>Atualizar Atendimento - ID: (aqui vem o número gerado pelo id do atendimento)
<p>Data de abertura : <br>
<form>
<p> Cliente: "Nome do cliente"<br>
<p>Animal: <input type="checkbox" name="animal">animal 1 </input>
<input type="checkbok" name="animal2">animal 2 </input>
<input type="checkbox" name="animal3">animal 3 </input>
<p>Serviço: <select value="servico"><option value='serv1'>Serviço 1</option></select><br>
<br>
<br>
<br>
<p>Atualizações:
<table border=1>
	<tr><td>Data</td> <td>Descrição</td> <td>Autor</td></tr>
	<tr><td>00/00/00 - 00h00</td> <td>Foi feita tosa</td> <td>Fulano de tal</td></tr>
	<tr><td>00/00/00 - 00h00</td> <td>Foi feita tosa</td> <td>Fulano de tal</td></tr>
</table>
</form>
<p>Ultima atualização: dataHora por fulano
<table>
<tr><td><input type='submit' value='Salvar' class='but' /></td><td><input type='radio' value='concluir'><a href="#" class="but">Concluir</a></input></td></tr>
</table>

</div>
</div>
</div>
</body>
</html>