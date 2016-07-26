<!-- formulário de pesquisar serviço -->

@extends('layouts.principal')
@section('content')

<p><h3 align='center'>Pesquisar Serviço</h3><br>
        <form>
            <fieldset>
                <p><label>Nome:</label><input type='text' name='nome_servico' /><br>
                <p><label>Preço:</label><input type='text' name='preco_servico' /><br>
                <p><label>Duração:</label><input type='time' name='duracao_servico' /> <br>
                
                <p><label>Validade:</label><input type='date' name='validade_servico'/><br>
            </fieldset>
            <table>
                <tr>
                    <td><input type='submit' value='Pesquisar' class='but' /></td>
                    <td><input type='reset' value='Cancelar' class='but-limpar' /></td>
                </tr>
            </table>


@endsection