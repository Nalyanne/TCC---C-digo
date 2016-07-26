<!-- Formulário de alterar dados do usuário -->

@extends('layouts.principal')
@section('content')

   <p> <h3>Alterar Usuário</h3></p>
    
<!-- DADOS DE LOGIN -->

        <form method="POST" action="/usuario/update">
        
        {!! csrf_field() !!}
        
        <input type="hidden" name="cod_usuario" value="{{$usuario['cod_usuario']}}" />

        
            <table cellspacing="10">
                <tr><th colspan="4"> <legend>Dados de login</legend></th></tr>
            <tr>
                <td>Funcionário:<select name="cod_funcionario">
                        <option value='1' <?php if($usuario['cod_funcionario'] == 1) echo'selected="selected"'?> >Luciano</option>
                        <option value='2' <?php if($usuario['cod_funcionario'] == 2) echo'selected="selected"'?> >Marina</option>
                        <option value="3" <?php if($usuario['cod_funcionario'] == 3) echo'selected="selected"'?> >Carla</option>
                        <option value="4" <?php if($usuario['cod_funcionario'] == 4) echo'selected="selected"'?> >Luis</option>
                        <option value="5" <?php if($usuario['cod_funcionario'] == 5) echo'selected="selected"'?> >Rogério</option>
                    </select></td>
            </tr>
            <tr>
                    <td>
                        <label for="login">Login de usuário: </label>
                    </td>
                    <td align="left">
                        <input type="text" name="login" value="{{$usuario['login']}}" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pass">Senha: </label>
                    </td>
                    <td align="left">
                        <input type="password" name="senha" value="">
                    </td>
                </tr>
                
            </table>
            <br/>

<!-- DADOS DE tipo de usuário -->
            <table cellspacing="10">
                <tr>
                    <td>
                        <label>Cargo:</label>
                    </td>
                    <td>
                        <select name="cod_tipo_usuario">
                            <option value="6" <?php if($usuario['cod_tipo_usuario'] == 6)echo 'selected="selected"'; ?> >Administrador</option>
                            <option value="1" <?php if($usuario['cod_tipo_usuario'] == 1)echo 'selected="selected"'; ?> >Gerente</option>
                            <option value="2" <?php if($usuario['cod_tipo_usuario'] == 2)echo 'selected="selected"'; ?> >Supervisor</option>
                            <option value="3" <?php if($usuario['cod_tipo_usuario'] == 3)echo 'selected="selected"'; ?> >Atendente</option>
                            <option value="4" <?php if($usuario['cod_tipo_usuario'] == 4)echo 'selected="selected"'; ?> >Tosador</option>
                            <option value="5" <?php if($usuario['cod_tipo_usuario'] == 5)echo 'selected="selected"'; ?> >Tratador de Animais</option>
                        </select> 
                    </td
                </tr>
            </table>

<!-- botões de ação do formulário -->
            <table>
                <tr>
                    <td><input type="submit" class="but" value="Alterar"></td>
                    <td><button class="but-limpar"><a href="/usuarios">Voltar</a></button></td>
                </tr>
            </table>
        </form>

@endsection