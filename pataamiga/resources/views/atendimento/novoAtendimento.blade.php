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
            <p><h6 align="center">Data de Abertura:<?php date_default_timezone_set('America/Sao_Paulo');
            $dataHora = date ('d/m/Y - H:i:s');
            echo $dataHora;?></h6>
            <hr width="1050px" align="left">
    
    <fieldset>
            
            <p>Cliente: <select name='cod_cliente'>

                @foreach($cliente as $cliente)
                <option  value="{{$cliente['cod_cliente']}}">{{$cliente['nome']}}</option>
                    @endforeach
            </select>
                
<!--Fazer um if pra pegar o cliente e animal no msm pedido-->
            <p>Animal:<select name="cod_animal"> 
             @foreach($animal as $animal)
                <option value="{{$animal['cod_animal']}}">{{$animal['nome']}}</option>
                    @endforeach           
            </select>
                
        <p>Serviço:<select name='cod_servico'> 
                @foreach ($servico as $servico)
                <option value="{{$servico['cod_servico']}}">{{$servico['servico']}}</option>
                @endforeach
            </select>
            <br>
         <!-- Um if aqui tmb pra determinar preço e duração de serviço-->   
        <p>Duração:{{$servico['duracao']}} <br>
        <p>Preço: {{$servico['preco']}} <br>
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
            <td><input type='submit' value="Salvar" class='but' /></td> <td> <button class="but-limpar">Voltar<a href="/atendimentos"></a></button></td>
    </tr>
    </table>
    </form>

@endsection
