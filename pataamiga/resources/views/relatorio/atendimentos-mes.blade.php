@extends('layouts.principal')
@section('content')
<h2>Relatórios - Atendimentos por mês</h2>

<form  action="/relatorios" method="get">
	Selecione o relatório que deseja:
	<select name="t">
		<option value="1" >Serviços prestados</option>
		<option value="2" selected>Nº Atendimentos por Mês</option>
		<option value="3">Nº Atendimentos por Dia</option>
	</select>
	<br/>
	Informe o período desejado: De <input type="date" name="data_inicio" value="{{$form['data_inicio']}}">
	à <input type="date" name="data_fim" value="{{$form['data_fim']}}">
	<button type="submit" >Gerar Relatório</button>
</form>

	<div id='graficoServico' position='absolute'>

		{!! $lava->render('BarChart','Atendimentos','graficoServico') !!}

	</div>


@endsection