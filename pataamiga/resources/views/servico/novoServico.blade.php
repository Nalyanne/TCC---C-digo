<!-- formulário de inserção de serviços -->

@extends('layouts.principal')
@section('content')

<p><h3 align='center'>Cadastrar Serviço</h3><br>

        <form action="/servico/salvar" method="POST">
                    {!! csrf_field() !!}

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
                <p><label>Nome:</label><input type='text' name='servico' /><br>
                <p><label>Preço:</label><input type='text' name='preco' /><br>
                <p><label>Duração:</label><input type='time' name='duracao' /> <br>
                <p><label>Descrição:</label><input type='textarea' name='descricao' /> <br>
                <p><label>Validade:</label><input type='date' name='validade'/><br>
            </fieldset>
            <table>
                <tr>
                    <td><input type='submit' value='Salvar' class='but' /></td>
                    <td><button class="but-limpar"><a href="/servicos">Voltar</a></button></td>
                </tr>
            </table>
        </form>

@endsection