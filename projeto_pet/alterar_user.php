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
    
<!-- DADOS DE LOGIN -->

        <form method="POST" action="">
            <table cellspacing="10">
                <tr><th colspan="4"> <legend>Dados de login</legend></th></tr>
                <tr>
                    <td>
                        <label for="login">Login de usuário: </label>
                    </td>
                    <td align="left">
                        <input type="text" name="login">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pass">Senha: </label>
                    </td>
                    <td align="left">
                        <input type="password" name="pass">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="passconfirm">Confirme a senha: </label>
                    </td>
                    <td align="left">
                        <input type="password" name="passconfirm">
                    </td>
                </tr>
            </table>
            <br/>
<!-- DADOS DE Funcionario -->
            <table cellspacing="10"> 
                <tr>
                    <td>
                        <label for="funcionario">Nome do Funcionário:</label>
                    </td> 
                    <td align="left"> <input type="text" nome="funcionario" />
                    </td>
                </tr>
                <tr>
                    <td>Aqui vai um ajax ou javascrip com nome do funcionário puxado do banco de dados, mais outras
            informações relevantes.
                    </td>
                </tr>
            </table>
<!-- DADOS DE tipo de usuário -->
            <table cellspacing="10">
                <tr>
                    <td>
                        <label>Cargo:</label>
                    </td>
                    <td>
                        <select name="Cargo">
                            <option value="admin">Administrador</option>
                            <option value="gerente">Gerente</option>
                            <option value="supervisor">Supervisor</option>
                            <option value="atendente">Atendente</option>
                        </select> 
                    </td
                </tr>
            </table>

<!-- botões de ação do formulário -->
            <table>
                <tr>
                    <td><input type="submit" class="but" value="Alterar"></td>
                    <td><input type="reset" value="Limpar" class="but-alerta"></td>
                </tr>
            </table>
        </form>
</div>
</div>
</body> 
</html>