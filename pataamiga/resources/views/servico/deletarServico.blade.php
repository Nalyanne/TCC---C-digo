<!-- formulário de deletar serviço -->

@extends('layouts.principal')
@section('content')

<p><h3 align='center'>Deletar Serviço</h3><br>
        <form>
            <fieldset>
                <p><label>Nome:</label>
                    <select value='servico'>
                        <option value='serv1'>Serviço 1</option>
                        <option value='sevi2'>Serviço 2</option>
                    </select><br>
                
            </fieldset>
            <table>
                <tr>
                    <td><input type='submit' value='Deletar' class='but-alerta' /></td>
                    <td><input type='reset' value='Cancelar' class='but-limpar' /></td>
                </tr>
            </table>


@endsection