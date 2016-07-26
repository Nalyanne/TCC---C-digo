<!-- Formulário de alteração de atendimentos-->

@extends('layouts.principal')
@section('content')

<form action="/atendimento/update" method="POST">

{!! csrf_field() !!}

@if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <input type="hidden" name="cod_atendimento" value="{{$alterar['cod_atendimento']}}" />


    <hr width="1050px" align="left">
    <p><h4 align="center">Alterar Atendimento - ID: {{$alterar['cod_atendimento']}}</h4>
    <hr width="1050px" align="left">

    <fieldset>
<p>Cliente: <input type='text' name='cod_cliente' value="{{$alterar['cod_cliente']}}" /> <br>
<p>Animal: Hans<br>

<p>Serviço:<select name='cod_servico'>
@foreach($servico as $servicos)
<option <?php if($alterar['cod_servico'] == $servicos['cod_servico']) echo'selected="selected"' ;?> value="{{$servicos['cod_servico']}}" > {{$servicos['servico']}}</option>
@endforeach

 </select><br>
<p>Duração: <br>
<p>Preço: <br>
    </fieldset>
    
    <fieldset>
<p>Data de execução: <input type='date' name='data_servico' value="{{$alterar['data_servico']}}" /> - <input type="time" name="hora_servico"  value="{{$alterar['hora_servico']}}" /><br>
<p>Observações: <textarea name="observacao" value="{{$alterar['observacao']}}"> </textarea>
<p>Termmino previsto:  <br>
    </fieldset>
    <p><fieldset>

    </fieldset>
<table>
    <tr>
        <td><input type='submit' value="Salvar" class='but' /></td> <td><button class="but-limpar"><a href="/atendimentos">Voltar</a></button></td>
    </tr>
</table>

</form>

@endsection