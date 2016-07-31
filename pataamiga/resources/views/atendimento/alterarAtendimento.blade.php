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
        <p>Cliente: {{$alterar['cliente']['nome']}} <br><!-- Puxar os animais de acordo com o código do cliente, para altearção.-->
        <input type='hidden' name='cod_cliente' value="{{$alterar['cliente']['cod_cliente']}}" />
        
        <p>Animal: {{$alterar['animal']['nome']}}<br>

        <p>Serviço:<select name='cod_servico' id="servico">
            @foreach($servico as $servicos)
                <option <?php if($alterar['cod_servico'] == $servicos['cod_servico']) echo'selected="selected"' ;?> value="{{$servicos['cod_servico']}}" > {{$servicos['servico']}}</option>
            @endforeach
        </select><br>
         <div id="info_servico">
            <p>Duração: <span id="duracao_servico">{{$alterar['servico']['duracao']}} </span> <br>
            <p>Preço:   <span id="preco_servico">{{$alterar['valor']}} </span><br>
            <input type="hidden" name="valor" id="valor_servico" value="{{$alterar['valor']}}">
        </div>
        
    </fieldset>

    <fieldset>
        <p>Data de execução: <input type='date' name='data_servico' value="{{$alterar['data_servico']}}" /> - <input type="time" name="hora_servico"  value="{{$alterar['hora_servico']}}" /><br>
        
        <p>Observações: <textarea name="observacao" value="{{$alterar['observacao']}}"> </textarea>
        
        <p>Termmino previsto:  <br>
    </fieldset>

    <p><fieldset>
        <p><label>Funcionoário:</label><select name="cod_funcionario">
            @foreach($funcionario as $funcionario)
                <option <?php if ($funcionario['cod_funcionario'] == $alterar['cod_funcionario']) {
                echo 'selected="selected"';
                } ?> value="{{$funcionario['cod_funcionario']}}">{{$funcionario['nome']}}</option>
            @endforeach
        </select>
    </fieldset>

    <table>
        <tr>
        <td><input type='submit' value="Salvar" class='but' /></td> <td><button class="but-limpar"><a href="/atendimentos">Voltar</a></button></td>
        </tr>
    </table>

</form>
<script type="text/javascript">
    $(function() {

        $('#servico').change(function(){            
            var idServico = $(this).val();
            $.get( "/servico-detalhes/"+idServico, function( data ) {
                   
                    $('#duracao_servico').html(data.duracao);
                    $('#preco_servico').html(data.preco);
                    $('#valor_servico').val(data.preco);
            });
        })
        
    });
</script>
@endsection