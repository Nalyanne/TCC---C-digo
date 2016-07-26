<!-- formulário de pesquisa de animal -->
@extends('layouts.principal')
@section('content')

 <form>
        <p><h3>Pesquisar Animal</h3></p>
    <br>
    <p><label>Nome:</label><input type="text" name="nome_animal" />
    <p><label>Espécie:</label><select name="especie">
            <option value="cachorro">Cachorro(a)</option>
            <option value="gato">Gato (a)</option>
        </select><br>
    <p><label>Raça</label>:<select name="raca">
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select><br>
    <p><label>Cor:</label><select name="cor">
            <option value="branco">Branco</option>
            <option value="cinza">Cinza</option>
            <option value="laranja">Laranja</option>
            <option value="malhado">Malhado</option>
            <option value="marrom">Marrom</option>
            <option value="preto">Preto</option>
        </select><br>
    <p><label>Porte:</label><select name="porte">
            <option value="pequeno">Pequeno</option>
            <option value="medio-pequeno">Médio Pequeno</option>
            <option value="medio-medio">Médio Médio</option>
            <option value="médio-grande">Médio Grande</option>
            <option value="Grande">Grande</option>
        </select><br>
    <p><label>Pedigree:</label><input type="text" name="pedigree" />
        <br>
    
    </form>
    <br>
    <p>
    <table>
        <tr><td><input type="submit" value="Salvar" class="but" /></td>
            <td><input type="reset" value="Cancelar" class="but-limpar" />
        </tr>
    </table>


@endsection