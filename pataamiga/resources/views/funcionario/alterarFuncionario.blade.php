<!-- formulário para alterações de dados dos funcionários -->
@extends('layouts.principal')
@section('content')

 <p><h3>Alterar dados de Funcionário</h3></h<br>
    <form>    
       <fieldset>
            <p><label>Telefone:</label><input type='text' name='telefone_funcionario' /><input type='button' value='+' /> <input type='checkbox' name='whatsapp'>Whatsapp </input> <br>
            <p><label>Email:</label><input type='text' name='email_funcionario' /><br>
                </fieldset>
        <fieldset>
            <p><label>CEP:</label><input type='text' name='cep_funcionario' /><br>
            <p><label>Endereço:</label><input type='textarea' name='endereco_funcionario' /><br>
            <p><label>Complemento:</label><input type='text' name='complemento_funcionario' /><br>
                        
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
                <td><input type='submit' value='Salvar Alterações' class='but' /> </td>
                <td><input type='reset' value='Cancelar' class='but-limpar' /> </td>
            </tr>
        </table>
    </form>
 

@endsection