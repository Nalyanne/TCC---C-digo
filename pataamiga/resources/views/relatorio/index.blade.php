@extends('layouts.principal')
@section('content')
pagina principal de relatórios mostrar charts de visualização (listagem)

//
	<div id='grafico' position='absolute'>

		{!! $lava->render('PieChart','Meses','grafico') !!}

	</div>

	<div id='graficoServico' position='float'>

		{!! $lava2->render('BarChart','Servicos','graficoServico') !!}

	</div>

@endsection