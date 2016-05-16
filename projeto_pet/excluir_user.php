<?php session_start();
$nome = $_SESSION['user'];
?>
<html>
    
  <title>Petshop</title>
  
<head>
    <meta http-equiv="Content-Type" content="text/html;" charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <!--><script type="text/javascript" src="js/jquery-1.12.3.js"></script>
    <script type="text/javascript" src="js/script.js"></script><-->
<head>
    
<body>
    <?PHP require 'configs/conexao.php' ; ?>
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
    </div>
    
<div id="corpo">

    <div id="crud">
        <a href="incluir_user.php" class="but">Cadastrar</a><br />
        <a href="" class="but">Pesquisar</a><br />
        <a href="alterar_user.php" class="but">Alterar</a><br />
        <a href="excluir_user.php" class="but">Deletar</a><br />
    </div>

    <?php ?>

    <div id="conteudo">
        <p> Aqui vem informações dos usuarios, caixa de texto que são preenchidas automaticamente.</p>
        <form>
            <p><label>Nome de Login:</label><input type="text" name="login" /><br>           
            <p><label>CPF:</label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" name="CPF" /><br>
            <p> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" name="funcionario" /> - campo que vai receber um resultado do banco com os dados do
                funcionário mais o botão de excluir<br><br<br>
            <p> &nbsp
            <p><table cellspading=""><tr><td><button type="submit" class="but-alerta" value="Excluir">Excluir</button> &nbsp &nbsp</td>
                    <td><button type="reset" value="Limpar" class="but-limpar">Limpar</button></td></tr></table>
            
        </form>
    </div>
</div>
</body> 
</html>