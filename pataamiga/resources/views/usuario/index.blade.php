@extends('layouts.principal')
@section('content')
<!--pagina principal de usuarios (listagem)-->

<Br>
<p>Para cadastrar um usuário: <button class="btn"><a href="/usuario/novo">Novo</a></button>
<Br>
<hr>
<div align="center">
	
	<h3>Usuários</h3>
	<br>

	<table class="table">
		<tr>
			<thead>
				<th>Funcionário</th>
				<th>Login</th>
				<th>Ações</th>
			</thead>
		</tr>
		<TR>
			<tbody>
			@foreach($usuarios as $usuario)
				<td>{{$usuario['cod_funcionario']}}</td>
				<td>{{$usuario['login']}}</td>
				<td>
					<button class="btn-edit"><a href="/usuario/alterar/{{$usuario['cod_usuario']}}">Editar</a></button>
					<button class="btn-delete"><a href="/usuario/deletar/{{$usuario['cod_usuario']}}">Deletar</a></button>
				</td>
			</tbody>
		</TR>
		@endforeach
	</table>
</div>
@endsection