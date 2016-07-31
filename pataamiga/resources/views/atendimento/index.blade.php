<!-- pagina principal de atendimento (listagem)  -->

@extends('layouts.principal')
@section('content')
<br>

<p>Para inserir um novo atendimento: <button class="btn"><a href="/atendimento/novo">Novo</a></button><br>
<hr>
<br>
<div align="center">
	<table class="table">
		<tr>
			<thead>
				<th>
					ID do Atendimento
				</th>
				<th>
					Serviços
				</th>
				<th>Duração</th>
				<th>Status</th>
				<th>Funcionário</th>
				<th>Horário</th>
				<th>Ação</th>
			</thead>
		</tr>

			<tbody>
			<?php #dd($atendimentos); ?>
@foreach($atendimentos as $atendimento)

				<tr>
					<td>{{$atendimento['cod_atendimento']}}</td>
					<td>{{$atendimento['servico']['servico']}}</td>
					<td>{{$atendimento['servico']['duracao']}}</td>
					<td>{{$atendimento['status']['status_atendimento']}}</td>
					<td>{{$atendimento['funcionario']['nome']}}</td>
					<td>{{$atendimento['hora_servico']}} - {{$atendimento['data_servico_br']}}</td>
					
					<td><button class="btn-edit"><a href="/atendimento/atualizar/{{$atendimento['cod_atendimento']}}">Atualizar</a></button>
					<button class="btn-edit"><a  href="/atendimento/alterar/{{$atendimento['cod_atendimento']}}">Editar</a></button>
					<button class="btn-delete"><a href="/atendimento/cancelar/{{$atendimento['cod_atendimento']}}">Cancelar</a></button>
					</td>
				</tr>
		@endforeach
			</tbody>
		
	</table>
<h2>Finalizados</h2>
		<table class="table">
		<tr>
			<thead>
				<th>
					ID do Atendimento
				</th>
				<th>
					Serviços
				</th>
				<th>Duração</th>
				<th>Status</th>
				<th>Funcionário</th>
				<th>Horário</th>
			</thead>
		</tr>

			<tbody>
			<?php #dd($atendimentos); ?>
@foreach($atendimentosFinalizados as $atendimento)

				<tr>
					<td>{{$atendimento['cod_atendimento']}}</td>
					<td>{{$atendimento['servico']['servico']}}</td>
					<td>{{$atendimento['servico']['duracao']}}</td>
					<td>{{$atendimento['status']['status_atendimento']}}</td>
					<td>{{$atendimento['funcionario']['nome']}}</td>
					<td>{{$atendimento['hora_servico']}} - {{$atendimento['data_servico_br']}}</td>
					
				</tr>
		@endforeach
			</tbody>
		
	</table>
</div>
@endsection