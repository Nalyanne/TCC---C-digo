<!--*Formulário de cadastro de cliente -->

@extends('layouts.principal')
@section('content')


<form action="/cliente/salvar" method="POST">
 {!! csrf_field() !!}
         <fieldset>
         
         <p><h3>Cadastro de Clientes</h3><br>
         @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
       
         <p><label>Nome:</label><input type="text" name="nome" />
         <p><label>Gênero:</label><select name="genero">
                 <option value="f">Feminino</option>
                 <option value="m">Masculino</option>
             </select>
         <p><label>Data de Nascimento:</label><input type="date" name="dt_nascimento" /><br>
         <p><label> CPF:</label><input type="text" name="cpf" />
         </fieldset>
         
         <fieldset>
         <p><label>Telefone(s):</label><input type="text" name="telefone" /> <input type="checkbox" name="whatsapp">Whatsapp</input> <br>
         <p><label>Email:</label><input type="text" name="email" />
         </fieldset>
         
         <fieldset>
             <p><label>CEP:</label><input type="text" name="CEP" /><br>
         
             <p><label>Endereço:</label><input type="text" name="endereco" /><br>
        
             <p><label>Complemento:</label><input type="text" name="complemento" /> <br>
             <p><button class="but-incluir"><a href="/animal/novo">Animais</a></button><br>
         </fieldset>
             
         <table>
             <p> <tr>
                 <td><input type="submit" class="but" value="Salvar" /></td> <td><button class="but-limpar""><a href="/clientes">Cancelar</a></button></td>
             </tr>
         </table>
             
         
   
     
     </form>

@endsection