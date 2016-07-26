<!-- formulário de alteração de serviço -->

@extends('layouts.principal')
@section('content')

<p><h3 align='center'>Alterar Serviço</h3><br>
        <form action="/servico/update" method="POST">

        {!! csrf_field() !!}
<input type="hidden" name="cod_servico" value="{{$servico['cod_sesrvico']}}" />


            <p><h3>Alterar dados do Serviço</h3><br>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


            <fieldset>
                <p><label>Serviço:</label><input type="text" name='servico' value="{{$servico['servico']}}">
               
                <p><label>Preço:</label><input type='double' name='preco' value="{{$servico['preco']}}" /><br>
                <p><label>Duração:</label><input type='time' name='duracao' value="{{$servico['duracao']}}" /> <br>
                <p><label>Descrição:</label><input type='textarea' name='descricao' value="{{$servico['descricao']}}" /> <br>
                <p><label>Validade:</label><input type='date' name='validade' value="{{$servico['validade']}}" /><br>
            </fieldset>
            <table>
                <tr>
                    <td><input type='submit' value='Salvar Alterações' class='but' /></td>
                    <td><button class="but-limpar"><a href="/servicos">Voltar</a></button></td>
                </tr>
            </table>
            </form>

@endsection