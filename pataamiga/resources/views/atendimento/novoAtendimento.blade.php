<!-- Formulário de novo atendimento -->
@extends('layouts.principal')
@section('content')

    <form action="/atendimento/salvar" method="POST">
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

            <hr width="1050px" align="left">
            <p><h3 align="center">Novo Atendimento - ID {{$atend}} </h3>
            
            <hr width="1050px" align="left">
    
    <fieldset>
            
            <p>Cliente: <select name='cod_cliente' id="cliente">
                 <option  value="0">Selecione</option>
                @foreach($cliente as $cliente)
                <option  value="{{$cliente['cod_cliente']}}">{{$cliente['nome']}}</option>
                    @endforeach
            </select>
                
<!--Fazer um if pra pegar o cliente e animal no msm pedido-->
            <p>Animal:<select name="cod_animal" id="animal"> 
                       
            </select>
                
        <p>Serviço:<select name='cod_servico' id="servico"> 
                <option  value="0">Selecione</option>
                @foreach ($servico as $servico)
                <option value="{{$servico['cod_servico']}}">{{$servico['servico']}}</option>
                @endforeach
            </select>
            <br>
         <!-- Um if aqui tmb pra determinar preço e duração de serviço-->   
        <div id="info_servico">
            <p>Duração: <span id="duracao_servico"> </span> <br>
            <p>Preço:   <span id="preco_servico"> </span><br>
            <input type="hidden" name="valor" id="valor_servico" value="">
        </div>
        
    </fieldset>

    <fieldset>
        <p>Data de execução: <input type='date' name='data_servico' /> - <input type="time" name="hora_servico"<br>
        <p>Observações: <textarea name='observacao'> </textarea>
        <p>Termmino previsto: {{$tempo=$servico['duracao']}} <br>
    </fieldset>
    
    <p>
    <p>
    <table>
        <tr>
            <td><input type='submit' value="Salvar" class='but' /></td> <td> <button type="button" class="but-limpar">Voltar<a href="/atendimentos"></a></button></td>
    </tr>
    </table>
    </form>
<script type="text/javascript">
    $(function() {

        $("#info_servico").hide();

        $('#cliente').change(function(){
            $('#animal').html('<option value="0">Carregando...</option>');
            
            var idCliente = $(this).val();
            $.get( "/animais-cliente/"+idCliente, function( data ) {
                    var opcoes = '<option value="0">Selecione</option>';
                    $.each(data, function (index, animal) {
                      opcoes += '<option value="'+animal.cod_animal+'">'+animal.nome+'</option>';
                      //
                      
                    });
                    $('#animal').html(opcoes);
            });
        });


        $('#servico').change(function(){            
            var idServico = $(this).val();
            $.get( "/servico-detalhes/"+idServico, function( data ) {
                   
                    $('#duracao_servico').html(data.duracao);
                    $('#preco_servico').html(data.preco);
                    $('#valor_servico').val(data.preco);
                    $("#info_servico").show();
            });
        })
        
    });
</script>
@endsection
