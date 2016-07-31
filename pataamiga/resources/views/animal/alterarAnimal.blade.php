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

<p><label>Espécie:</label><select name="cod_especie">
 @foreach($especies as $especie)

        <option <?php if($especie['cod_especie'] == $animals['cod_especie']) echo'selected="selected"' ;?> value="{{$especie['cod_especie']}}">{{$especie['especie']}} </option>
        @endforeach
        <br>

        <p><label>Raça:</label><select name="cod_raca">
    @foreach ($racas as $raca)
        <option <?php if($raca['cod_raca'] == $animals['cod_raca']) echo'selected="selected"' ; ?> value="{{$raca['cod_raca']}}">{{$raca['raca']}}</option>
        @endforeach
        </select> <br>

    <p><label>Pedigree:</label><input type="text" name="pedigree" value="{{$animals['pedigree']}}" /><br>

    <p><label>Sexo:</label><select name='sexo'>
        <option <?php if($animals['sexo'] == "Femea") echo'select="selected"' ;?> value="Femea">Femea</option>
        <option <?php if($animals['sexo'] == "Macho") echo'select="selected"' ;?> value="Macho">Macho</option>
        </select> <br>

    <p><label>Cor:</label><select name="cod_cor">
    @foreach($cores as $cor)
        <option <?php if($cor['cod_cor'] == $animals['cod_cor']) echo'select="selected"' ;?> value="{{$cor['cod_cor']}}">{{$cor['cor']}}</option>
        @endforeach
        </select> <br>

    <p><label>Porte:</label><select name="cod_porte">
    @foreach($portes as $porte)
        <option  <?php if($porte['cod_porte'] == $animals['cod_porte']) echo'select="selected"' ;?> value="{{$porte['cod_porte']}}">{{$porte['porte']}}</option>
        @endforeach
       </select> <br>
       <p><label>Data de Nascimento:</label><input type="date" name="dt_nascimento" value="{{$animals['dt_nascimento']}}" /><br>
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