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
    <!-- Aqui deve ser incializada a várivel de usuario/login - alinhada a esquerda da tela. -->
    <BR>
    <p>
           
    <form method="Post" action="#" />
    <p><input type="submit" value="Sair">
    </form>

        <div id="foto">
        <a href="/"><img src="<?php echo asset('imagens/logo.jpg') ;?>" border="1px"  /></a>
        </div>

    </div>

      <div id="menu">
       <ul class="nav">

            <li><a href="/clientes">Clientes</a>
             <!-- <ul>
                <li><a href="/cliente/novo">Cadastrar</a></li>
                <li><a href="/cliente/pesquisar">Pesquisar</a></li>
                <li><a href="/cliente/alterar">Alterar</a></li>
                <li><a href="/cliente/delete">Deletar</a></li>
              </ul>-->
              </li>

            <li><a href="/animais">Animais</a>
              <!--<ul>
                <li><a href="/animal/novo">Cadastrar</a></li>
                <li><a href="/animal/pesquisar">Pesquisar</a></li>
                <li><a href="/animal/alterar">Alterar</a></li>
              </ul>-->
              </li>

           <li>
             <a href="/atendimentos">Atendimento</a>
              <ul>
                <li><a href="/atendimento/novo">Novo</a></li>
                <li><a href="/atendimento/atualizar">Atualizar</a></li>
                <li><a href="/atendimento/pesquisar">Pesquisar</a></li>
                <li><a href="/atendimento/alterar">Alterar</a></li>
                <li><a href="/atendimento/cancelar">Cancelar</a></li>
              </ul>
            </li>
            <li><a href="/agenda">Agenda</a></li>

            <li><a href="/servicos">Serviços</a>
              <!--<ul>
                <li><a href="/servico/novo">Cadastrar</a></li>
                <li><a href="/servico/pesquisar">Pesquisar</a></li>
                <li><a href="/servico/alterar">Alterar</a></li>
                <li><a href="/servico/deletar">Deletar</a></li>
              </ul><-->
              </li>

            <li><a href="/funcionarios">Funcionários</a>
            <ul>
                <li><a href="/funcionario/novo">Cadastrar</a></li>
                <li><a href="/funcionario/pesquisar">Pesquisar</a></li>
                <li><a href="/funcionario/alterar">Alterar</a></li>
                <li><a href="/funcionario/deletar">Deletar</a></li>
              </ul>
              </li>

            <li><a href="/relatorios">Relatórios</a></li>
            <li><a href="/usuarios">Usuários</a>
             <!-- <ul>
                <li><a href="/usuario/novo">Cadastrar</a></li>
                <li><a href="/usuario/pesquisar">Pesquisar</a></li>
                <li><a href="/usuario/alterar">Alterar</a></li>
                <li><a href="/usuario/deletar">Deletar</a></li>
              </ul> -->
              </li>

          </ul>
      </div>

        <div id="corpo">
        @yield('content')
        <!--<p>Aqui deve ser entregue informações gerais sobre o sistema, ultimo cadastro de cliente/animal, atendimentos, e funcionário/usuário.</p>p -->
        </div>
</body>
</html>