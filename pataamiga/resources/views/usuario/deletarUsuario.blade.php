<!-- formulário de exclusão de usuário -->
@extends('layouts.principal')
@section('content')

 <p> <h3>Exclusão de Usuário</h3></p>
        <form>
            <p><label>
                    Usuário:</label> <select>
                        <option value='fun1'>user.funcionario (Funcionario 1)</option>
                        <option value='fun2'>user.funcionario (Funcionario 2)</option>
                    </select> 
                    
                <br>
                <br>
                    
            <p><table cellspading="">
                <tr>
                    <td><button type="submit" class="but-alerta" value="Excluir">Excluir</button></td>
                    <td><button type="reset" value="Limpar" class="but-limpar">Limpar</button></td>
                </tr></table>
            
        </form>

@endsection