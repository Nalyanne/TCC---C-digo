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
    <p> Cliente: {{$att['cod_cliente']}}<br>
<p>Animal: {{$att['cod_animal']}} <br>

<p>Serviço: <select name="cod_servico">
    @foreach($servicos as $servico)

    <option <?php if($att['cod_servico'] == $servico['cod_servico'] ) echo 'selected="selected"';?> value="{{$servico['cod_servico']}}" > {{$servico['servico']}}</option>
        @endforeach
    </select><br>
    
<br>
<br>
<br>
    </fieldset>
    
    
<fieldset>
    <p>Atualizações: <textarea name="atualizacao"></textarea>


</fieldset>

    <fieldeset>    
<table>
    <tr><td><input type='submit' value='Salvar' class='but' /></td><td align='right'></td>
        <td><button class="but-incluir"><a href="#">Concluír Atendimento</a></button></td>

        <td><button class="but-limpar"><a href="/atendimentos" class=>Voltar</a></button></td></tr>
</table>
    </fieldeset>
</form>
@endsection