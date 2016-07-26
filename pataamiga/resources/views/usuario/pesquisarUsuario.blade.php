<!-- formulário de pesquisa de usuário -->

@extends('layouts.principal')
@section('content')

<p><h3>Pesquisar Usuário</h3><br>
    <form>
		<table>
		<tr><td><p>Nome Completo:</td><td><input type="text" name="nome_completo" /><br></td></tr>
		<tr><td><p>CPF: </td><td><input type="text" name="cpf" /> <br></td></tr>
		<tr><td><p>Nome de Login: </td><td><input type="text" name="nome_login" /></td></tr>
		<tr><td><p>Situação:</td><td><select value="situacao"><option value="ativo">Ativo</option><option value="inativo">Inativo</option></select></td></tr>
			</table>
        <br>
		   <table>
                <tr>
                    <td><input type="submit" class="but" value="Pesquisar"></td>
                    <td><input type="reset" value="Limpar" class="but-limpar"></td>
                </tr>
            </table>
        </form>

@endsection