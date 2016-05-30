<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cliente;

class ClienteController extends Controller
{
    public function index(){
    	$cliente = new Cliente();
    	$cliente->cpf = '021.111.111.-21';
    	$cliente->nome = 'Magno';
    	$cliente->dt_nascimento = '1989-12-10';
    	$cliente->genero = 'M';
    	$cliente->email = 'magno@email.com';
    	$cliente->telefone = '11111111';
    	$cliente->cep = '71.122-111';
    	$cliente->endereco = 'Rua tal';
    	$cliente->complemento = 'www';

    	$cliente->save();

    	$arrClientes = ['Magno', 'Joao', 'Maria'];
    	return view('cliente.index', ['clientes' => $arrClientes]);
    }
}
