<!-- Código da página de atualização de chamados -->

@extends('layouts.principal')
@section('content')


<hr width="1050px" align="left">
    <p><h4 align="center">Atualizar Atendimento - {{$att['cod_atendimento']}}</h4>
<hr width="1050px" align="left">
<p><br>


<form action="/atendimento/adicionar" method="POST">

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

    <fieldset>
    <p> Cliente: {{$att['cliente']['nome']}}<br> 
<p>Animal: {{$att['animal']['nome']}} <br>

<p>Serviço: {{$att['servico']['servico']}}<br>
    
<br>
<br>
<br>
    </fieldset>
    
    
<fieldset>

  
    <table class="table">
       
        <thead>
             <tr>
                <th>Ultima Atualização</th>
                <th>Atualizações</th>
              
            </tr>
        </thead>
        
        <tbody>
        @foreach($att['atualizacoes'] as $atualizacoes)
            <tr>    
                <td>
                    {{$atualizacoes['data_hora_br']}}
                </td>
                <td>
                    {{$atualizacoes['atualizacao']}}
                </td>
               
            </tr>
            @endforeach
        </tbody>
        
    </table>
  
    <p>Atualizações: <textarea name="atualizacao"></textarea>

<input type="hidden" name="cod_atendimento" value="{{$att['cod_atendimento']}}" />
</fieldset>

    <fieldeset>    
<table>
    <tr><td><input type='submit' value='Salvar' class='but' /></td><td align='right'></td>
        <td><button class="but-incluir"><a href="/atendimento/finalizar/{{$att['cod_atendimento']}}">Concluír Atendimento</a></button></td>

        <td><button class="but-limpar"><a href="/atendimentos" class=>Voltar</a></button></td></tr>
</table>
    </fieldeset>
</form>
@endsection