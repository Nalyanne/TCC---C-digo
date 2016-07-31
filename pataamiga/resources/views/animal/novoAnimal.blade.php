<!-- Formulário de cadastro de animal-->
@extends('layouts.principal')
@section('content')

<form action="/animal/salvar" method="POST">
 {!! csrf_field() !!}


        <p><h3>Cadastro de Animal</h3></p>

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
    <p>
    <label>Dono(cliente)</label>:<select name="cod_cliente">
    @foreach ($clientes as $cliente)

        <option value="{{$cliente['cod_cliente']}}" > {{$cliente['nome']}}</option>
        @endforeach 
        </select> <br>
    

    <p><label>Nome:</label><input type="text" name="nome" /><br>

    <p><label>Espécie:</label><select name="cod_especie">

    @foreach($especies as $especie)

        <option value="{{$especie['cod_especie']}}">{{$especie['especie']}} </option>
        @endforeach
        </select> <br>
        

    <p><label>Raça:</label><select name="cod_raca">
    @foreach ($racas as $raca)
        <option value="{{$raca['cod_raca']}}">{{$raca['raca']}}</option>
        @endforeach
        </select> <br>

    <p><label>Pedigree:</label><input type="text" name="pedigree" /><br>

    <p><label>Sexo:</label><select name='sexo'>
        <option value="Femea">Femea</option>
        <option value="Macho">Macho</option>
        </select> <br>

    <p><label>Cor:</label><select name="cod_cor">
    @foreach($cores as $cor)
        <option value="{{$cor['cod_cor']}}">{{$cor['cor']}}</option>
        @endforeach
        </select> <br>

    <p><label>Porte:</label><select name="cod_porte">
    @foreach($portes as $porte)
        <option value="{{$porte['cod_porte']}}">{{$porte['porte']}}</option>
        @endforeach
       </select> <br>

    <p><label>Data de Nascimento:</label><input type="date" name="dt_nascimento" /><br>
    <p><label>Histórico Médico:</label><input type="" name="historico" />
            <p><label>Situação:</label><select name="situacao">
            <option value="vivo">Vivo</option>
            <option value="doente-cronico">Doente Cronico</option>
        </select>
        <br>

    
    <br>
    <p>
    <table>
        <tr><td><input type="submit" value="Salvar" class="but" /></td>
            <td><button class="but-limpar"><a href="/animais">Cancelar</a></button></td>
        </tr>
    </table>
</form>
@endsection