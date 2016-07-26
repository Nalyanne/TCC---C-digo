@extends('layouts.principal')
@section('content')
<br>

<p>Para cadastrar um novo cliente:

<button class="btn" ><a href="/cliente/novo" >Novo</a></button><br>
<hr> 
<div align="center">
<h3>Clientes</h3> 
<table class="table">
	<thead>
	<tr>
		<th>Nome </th>    
		<th>Telefone </th>    
		<th>Email </th>    
		<th>Animal</th>     
		<th>Ação</th>
	</tr>
	</thead>

	<tbody>

<?php foreach ($clientes as $cliente) {
			//echo 	'<tr> <td>'.
		
 			//	$cliente['nome'].' 	</td>	' ;

		//}
	?> 
		<tr>
			<td>{{$cliente['nome']}}</td>
			<td>{{$cliente['telefone']}}</td>
			<td>{{$cliente['email']}}</td>
			<td> - </td>
			<td>
				
				<button class='btn-edit' ><a href="/cliente/alterar/{{$cliente['cod_cliente']}}">Editar</a></button>
				<button class='btn-delete'><a href="/cliente/delete/{{$cliente['cod_cliente']}}">Deletar</a></button>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
</div>
@endsection