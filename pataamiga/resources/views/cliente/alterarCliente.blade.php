<!--*Formulário de alterar de cliente -->

@extends('layouts.principal')
@section('content')

<form action="/cliente/update" method="POST">
{!! csrf_field() !!}
<input type="hidden" name="cod_cliente" value="{{$cliente['cod_cliente']}}" />


            <p><h3>Alterar dados do Cliente</h3><br>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <fieldset>
        
                <br>
            </fieldset>
            <fieldset>


             <p><label>Nome:</label> <input type="text" name="nome" value="{{$cliente['nome']}}" /><br>


                <p><label>Gênero:</label><select name="genero" >
                 <option <?php if($cliente['genero'] == 'f') echo 'selected="selected"'; ?> value="f">
                    Feminino
                 </option>
                 <option <?php if($cliente['genero'] == 'm') echo 'selected="selected"'; ?> value="m">
                    Masculino
                </option>
             </select>
         <p><label>Data de Nascimento:</label><input type="date" name="dt_nascimento" value="{{$cliente['dt_nascimento']}}"/><br>
         <p><label> CPF:</label><input type="text" name="cpf" value="{{$cliente['cpf']}}" />
         </fieldset>
         
         <fieldset>
         <p><label>Telefone(s):</label><input type="text" name="telefone" value="{{$cliente['telefone']}}" /> <input type="checkbox" name="whatsapp" ">Whatsapp</input> <br>
         <p><label>Email:</label><input type="text" name="email" value="{{$cliente['email']}}"/>
         </fieldset>
         
         <fieldset>
             <p><label>CEP:</label><input type="text" name="CEP" value="{{$cliente['CEP']}}"/><br>
         
             <p><label>Endereço:</label><input type="text" name="endereco" value="{{$cliente['endereco']}}" /><br>
        
             <p><label>Complemento:</label><input type="text" name="complemento" value="{{$cliente['complemento']}}" /> <br>
            </fieldset>      
            <table>
                <p><tr><td><input type="submit" class="but" value="Salvar Alterações" /></td><td><button class="but-limpar"><a href='/clientes '>Voltar</button>
</table>
        </form>


@endsection