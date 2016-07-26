@extends('layouts.principal')
@section('content')
<!--pagina principal de funcionarios (listagem) -->

<br>

<p> Para cadastrar um novo funcionário: <button class="btn"><a href="/funcionario/novo">Novo</a></button>
<br>
<hr>
<div align="center">
	<p><h3>Funcionários</h3><br>
<table class="table">
	
	<tr>
		<thead>
			<th>
				Código
			</th>

			<th>
				Nome
			</th>

			<th>
				Cargo
			</th>

			<th>
				Ação
			</th>
		</thead>

	</tr>
	<tr>
		<tbody>
		@foreach($funcionarios as  $funcionario)
			<td>{{$funcionario['cod_funcionario']}}</td>
			<td>{{$funcionario['nome']}}</td>
			<td>{{$funcionario['cod_cargo']}}</td>
			<td>
				<button class="btn-edit"><a href="#">Editar</a></button>
				<button class="btn-delete"><a href="#">Deletar</a></button>
			</td>
		</tbody>

	</tr>
	@endforeach
</table>
</div>
@endsection