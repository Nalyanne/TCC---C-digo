<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', 'LoginController@showLogin');

Route::get('/clientes', 'ClienteController@index');
Route::get('/cliente/novo', 'ClienteController@novo');
Route::post('/cliente/salvar', 'ClienteController@salvar');
Route::get('/cliente/pesquisar', 'ClienteController@pesquisar');
Route::get('/cliente/alterar/{id}', 'ClienteController@alterar');
Route::post('/cliente/update', 'ClienteController@update');
Route::get('cliente/delete/{id}', 'ClienteController@delete');

Route::get('/animais', 'AnimalController@index');
Route::get('/animal/novo', 'AnimalController@novo');
Route::get('/animal/pesquisar', 'AnimalController@pesquisar');
Route::get('/animal/alterar/{id}', 'AnimalController@alterar');
Route::post('/animal/salvar','AnimalController@salvar');
Route::post('/animal/update','AnimalController@update');

Route::get('/atendimentos','AtendimentoController@index');
Route::get('/atendimento/novo', 'AtendimentoController@novo');
Route::post('/atendimento/salvar','AtendimentoController@salvar');
Route::get('/atendimento/atualizar/{id}','AtendimentoController@atualizar');
Route::post('/atendimento/adicionar','AtendimentoController@adicionar');
Route::get('/atendimento/alterar/{id}', 'AtendimentoController@alterar');
Route::post('/atendimento/update','AtendimentoController@update');
Route::get('/atendimento/cancelar/{id}', 'AtendimentoController@cancelar');

Route::get('/agenda','AgendaController@index');

Route::get('/servicos','ServicoController@index');
Route::get('/servico/novo', 'ServicoController@novo');
Route::post('/servico/salvar','ServicoController@salvar');
Route::get('/servico/pesquisar', 'ServicoController@pesquisar');
Route::get('/servico/alterar/{id}','ServicoController@alterar');
Route::post('/servico/update','ServicoController@update');
Route::get('/servico/deletar/{id}','ServicoController@deletar');

Route::get('/funcionarios','FuncionarioController@index');
Route::get('/funcionario/novo','FuncionarioController@novo');
Route::get('/funcionario/pesquisar','FuncionarioController@pesquisar');
Route::get('/funcionario/alterar','FuncionarioController@alterar');
Route::get('/funcionario/deletar','FuncionarioController@deletar');

Route::get('/relatorios','RelatorioController@index');

Route::get('/usuarios','UsuarioController@index');
Route::get('/usuario/novo','UsuarioController@novo');
Route::post('/usuario/salvar','UsuarioController@salvar');
Route::get('/usuario/pesquisar','UsuarioController@pesquisar');
Route::get('/usuario/alterar/{id}','UsuarioController@alterar');
Route::post('/usuario/update','UsuarioController@update');
Route::get('/usuario/deletar/{id}','UsuarioController@deletar');

