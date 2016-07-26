<!-- Formulário de cadastro de novo Funcionário -->

@extends('layouts.principal')
@section('content')

<p><h3>Cadastrar Funcionário</h3></h<br>
    <form>
        <fieldset>
            <p><label>Nome:</label><input type='text' name='nome' /><br>
            <p><label>Data de Nascimento:</label><input type='date' name='dt_nascimento' /><br>
            <p><label>Gênero:</label><select name='genero'>
                    <option value='f'>Feminino</option>
                    <option value='m'>Masculino</option>
                </select><br>
            <p><label>CPF:</label><input type='text' name='cpf'/><br>
        </fieldset>
        <fieldset>
            <p><label>Telefone:</label><input type='text' name='telefone' /><input type='button' value='+' /> <input type='checkbox' name='whatsapp'>Whatsapp </input> <br>
            <p><label>Email:</label><input type='text' name='email' /><br>
                </fieldset>
        <fieldset>
            <p><label>CEP:</label><input type='text' name='CEP' /><br>
            <p><label>Endereço:</label><input type='textarea' name='endereco' /><br>
            <p><label>Complemento:</label><input type='text' name='complemento' /><br>
                        
        </fieldset>
        <fieldset>
            <p><label>Cargo:</label><select name='cargo'>
                    <option value='g'>Gerente</option>
                    <option value='s'>Supervisor</option>
                    <option value='a'>Atendente</option>
                </select><br>
            <p><label>Adicionar usuário:</label><input type='button' value='Adicionar'/><br>
                </fieldset>
        <table>
            <tr>
                <td><input type='submit' value='Salvar' class='but' /> </td>
                <td><button class="but-limpar"><a href="/funcionarios">Voltar</a></button> </td>
            </tr>
        </table>
    </form>
    
@endsection