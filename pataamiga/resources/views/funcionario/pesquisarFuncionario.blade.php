<!-- formulário de pesquisa de funcionários -->

@extends('layouts.principal')
@section('content')

 <p><h3>Pesquisar Funcionário</h3></h<br>
    <form>
        <fieldset>
            <p><label>Nome:</label>
        <select value='funcionario'>
                    <option value='funcionario1'>funcionario1</option>
                    <option value='funcionario2'>funcionario2</option>
                </select><br>
            <p><label>CPF:</label><input type='text' name='cpf_funcionario'/><br>
        </fieldset>
        <fieldset>
            <p><label>Cargo:</label><select value='cargo'>
                    <option value='g'>Gerente</option>
                    <option value='s'>Supervisor</option>
                    <option value='a'>Atendente</option>
                </select><br>
                 </fieldset>
        <table>
            <tr>
                <td><input type='submit' value='Pesquisar' class='but' /> </td>
                <td><input type='reset' value='Cancelar' class='but-limpar' /> </td>
            </tr>
        </table>
    </form>
    

@endsection