<!--*Formulário de deletar de cliente -->

@extends('layouts.principal')
@section('content')

<p><h3>Exclusão de cliente</h3><br>
        <p><label>Cliente:</label><select value="cliente">
                <option value="cliente1">Cliente 1(CPF) </option>
                <option value="cliente2">Cliente 2(CPF)</option>
                <option value="cliente3">Cliente 3(CPF)</option>
                <option value="cliente4">Cliente 4(CPF)</option>
                <option value="cliente5">Cliente 5(CPF)</option>
                <option value="cliente6">Cliente 6(CPF)</option>
                <option value="cliente7">Cliente 7(CPF)</option>
                <option value="cliente8">Cliente 8(CPF)</option>
                <option value="cliente9">Cliente 9(CPF)</option>
                
            </select><br>
        <p>
        <table>
            <tr>
                <td><input type="submit" value="Deletar Cliente" class="but-alerta" /></td>
                <td><button class="but"><a href="">Cancelar</a></button>
            </tr>
             
        </table>

@endsection