@extends('layouts.principal')
@section('content')


<!-- pagina principal de serviços (listagem) -->

<p> Para inserir um novo serviço:<button class="btn"><a href="/servico/novo">Novo</a></button>
<br>
<hr>
<div align="center">

<h3> Serviços </h3>
	<table class="table">
		<tr>
			<thead>
				<th>Serviço</th>
				<th>Preço</th>
				<th>Duração</th>
				<th>Validade</th>
				<th>Ação</th>
			</thead>
		</tr>
		<tr>
			<tbody>
			@foreach($servicos as $servico)
				<td>{{$servico['servico']}}</td>
				<td>{{$servico['preco']}}</td>
				<td>{{$servico['duracao']}}</td>
				<td>{{$servico['validade_br']}}</td>
				<td><button class="btn-edit"><a href="/servico/alterar/{{$servico['cod_servico']}}">Editar</a></button>
					<button class="btn-delete"><a href="/servico/deletar/{{$servico['cod_servico']}}">Deletar</a></button>
				</td>
			</tbody>
		</tr>
		@endforeach
	</table>
</div>
@endsection