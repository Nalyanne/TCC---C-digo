@extends('layouts.principal')
@section('content')
pagina principal de cliente (listagem)
<?php foreach ($clientes as $cliente) {
		echo $cliente.'<br/>';
	}
?>
@endsection