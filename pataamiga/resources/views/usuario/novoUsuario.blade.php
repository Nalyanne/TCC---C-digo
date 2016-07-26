<!-- Formulário de cadastro de usuário -->

@extends('layouts.principal')
@section('content')

<!-- DADOS DE LOGIN -->
<p><h3>Cadastro de Usuário</h3><br>


        <form method="POST" action="/usuario/salvar">


                {!! csrf_field() !!}
 
@if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <br>
        <p>

            <table cellspacing="10">
                <tr><th colspan="4"> <legend>Dados de login</legend></th></tr>
           <tr><td>Funcionário:<select name='cod_funcionario'>
           <option value="2">Marina dos Santos
           </option>
           <option value="3">Carla Oliveira</option>
           <option value="4">Luis Sergio Leite</option>
           <option value="5">Rogério Lombardi</option>
           </select></td></tr>

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
                        <input type="password" name="senha">
                    </td>
                </tr>
                
                </tr>
            </table>
            <br/>
<!-- DADOS DE Funcionario
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
            </table> -->
<!-- DADOS DE tipo de usuário -->
            <table cellspacing="10">
                <tr>
                    <td>
                        <label>Perfil do Usuário(cargo):</label>
                    </td>
                    <td>
                        <select name="cod_tipo_usuario">
                            <option value="6">Administrador</option>
                            <option value="1">Gerente</option>
                            <option value="2">Supervisor</option>
                            <option value="3">Atendente</option>
                            <option value="4">Tosador</option>
                            <option value="5">Tratador de Animais</option>
                        </select> 
                    </td
                </tr>
            </table>

<!-- botões de ação do formulário -->
            <table>
                <tr>
                    <td><input type="submit" class="but" value='Salvar'></td>
                   <td><button class="but-limpar"><a href="/funcionarios">Voltar</a></button></td>
                </tr>
            </table>
        </form>

@endsection