<!-- Formulário de cancelamento de atendimento -->

@extends('layouts.principal')
@section('content')

<hr width='1050px' align='left'>
    <p><h4 align='center'>Cancelar Atendimento</h4>
    <hr width='1050px' align='left'><br>
    <form>
        <fieldset>
        <p><label>ID:</label><select value='id'>
                <option value='id'>00000</option>
                <option value='id'>00000</option>
                <option value='id'>00000</option>
                <option value='id'>00000</option>
                <option value='id'>00000</option>
            </select><br>
            </fiedset>
        <fieldset>
            <p><label>Cliente:</label><input type='text' value='cliente 1' />
            <p><label>Animais:</label><input type='checkbox' checked="animal1" name='animal1'>Animal 1</input>
                ; <input type='checkbox' name='anime2'>Animal 2</input><br>
            <p><labe>Serviço: Banho</labe><br><p>Tosa<br>
            <p>
            <p><label>Data de Execução:</label> 00/00/00 - 00h00;<br>
            <p><label>Observações:</label><input type="textarea" name="observacoes_atendimento"/><br>
            <p><label>Termino Preisto:</label> 00/00/00 - 00h00;<br>
            <p><label>Utima atualização:</label>00/00/00 - 00h00;<br>
                
                
        </fieldset>
    </form>
    <table>
        <tr><td><input type='submit' value='Salvar' class='but-alerta' /></td> <td><button class='but-incluir'><a href='../atendimentos.php'>Desistir</a></button></td></tr>
    </table>

@endsection