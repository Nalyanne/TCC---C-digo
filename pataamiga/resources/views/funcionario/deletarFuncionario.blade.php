<!-- formulário de exclusão de funcionários -->

@extends('layouts.principal')
@section('content')

<p><h3>Exclusão de Funcionário</h3></h<br>
    <form>
        <fieldset> 
            <p><label>Nome:</label><select value='funcionario'>
                    <option value='funcionario1'>Funcionário 1</option>
                    <option value='funcionario2'>Funcionário 2 </option>
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
        <br>
        <table>
            <tr>
                <td><input type='submit' value='Deletar' class='but-alerta' /> </td>
                <td><input type='reset' value='Cancelar' class='but-limpar' /> </td>
            </tr>
        </table>
    </form>
    

@endsection