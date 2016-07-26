@extends('layouts.principal')
@section('content')

<!--pagina principal de animais (listagem)-->

<br>
<p>
Para cadastrar um novo animal: <button class="btn"><a href='/animal/novo'>Novo</a></button> <br>
<hr>
<div align="center">
<?php //dd($animais); ?><br/>

<h3>Animais</h3>
	<?php //echo $animal->cliente->nome; ?><br/>
<table class='table'>
	<thead>
		<tr>
			<th>Dono</th>
			<th>Animal</th>
			<th>Raça</th>
			<th>Especie</th>
			<th>Sexo</th>
			<th>Situação</th>
			<th>Ação</th>
		</tr>
	</thead>
	<tbody>
	@foreach($animais as $animal)
	
		<tr>
			<td> {{$animal['cliente']['nome']}}</td>
			<td> {{$animal['nome']}}</td>
			<td> {{$animal['raca']['raca']}}</td> <!-- o primeiro indice eh o objeto da relacao, o segundo o atributo do objeto -->
			<td> {{$animal['especie']['especie']}}</td>
			<td> {{$animal['sexo']}}</td>
			<td>{{$animal['situacao']}}</td>

			<td>
				<button class="btn-edit"><a href="/animal/alterar/{{$animal['cod_animal']}}">Editar</a></button>
				
			</td>
		</tr>
		
		@endforeach
	</tbody>
</table>
</div>

@endsection