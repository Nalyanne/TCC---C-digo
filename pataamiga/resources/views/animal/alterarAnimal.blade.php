<!-- formulário de alteção de animal -->
@extends('layouts.principal')
@section('content')
<form action="/animal/update" method="POST">

{!! csrf_field() !!}
<input type="hidden" name="cod_animal" value="{{$animals['cod_animal']}}" />


        <p><h3>Alterar dados de Animal</h3></p>

         @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


    <br>
    <p><label>Dono(cliente)</label>:<input type='text' name="cod_cliente" value="{{$animals['cod_cliente']}}" />
   <p><label>Animal:</label><input type="text" name="nome" value="{{$animals['nome']}}" />

    <p><label>Histórico Médico:</label><input type="text" name="historico" /><button>Adicionar Arquivo</button><br>
    <p><label>Situação:</label><select name="situacao">
            <option <?php if($animals['situacao'] == 'vivo') echo 'selected="selected"'; ?> value="vivo">Vivo</option>
            <option <?php if($animals['situacao'] == 'falecido') echo 'selected="selected"'; ?> value="falecido">Falecido</option>
            <option <?php if($animals['situacao'] == 'doente-cronico') echo 'selected="selected"'; ?> value="doente-cronico">Doente Cronico</option>
        </select>
        <br>
    
    
    <br>
    <p>
    <table>
        <tr><td><input type="submit" value="Salvar Alterações" class="but" /></td>
            <td><button class="but-limpar"><a href="/animais">Voltar</a></button></td>
        </tr>
    </table>
    </form>
@endsection