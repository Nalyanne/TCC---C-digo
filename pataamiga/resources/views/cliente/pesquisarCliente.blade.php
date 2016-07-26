<!--*Formulário de pesquisa de cliente -->

@extends('layouts.principal')
@section('content')
<form>
            <fieldset>
                <p><h3>Pesquisar cliente</h3>
                <p><label>Nome:</label><input type="text" name="nome_cliente" /><br>
                <p><label>CPF:</label>&nbsp &nbsp<input type="text" name="cpf_cliente" /><br>
                <p><label>Animais:</label> &nbsp <select value="animal">
                        <option value="cao">Cachorro(a):</option>
                        <option value="gato">Gato (a):</option>]   
                    </select>
                    <br>
            </fieldset>
            <table>
                <tr>
                    &nbsp &nbsp<td><input type="submit" value="Pesquisar" class="but" /></td> <td><input type="reset" value="Limpar" class="but-limpar" /></td>
                </tr>
            </table>
        </form>
@endsection