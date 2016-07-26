<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Cliente;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    public function index(){
    /*	$cliente = new Cliente();
    	$cliente->cpf = '021.111.111.-21';
    	$cliente->nome = 'Magno';
    	$cliente->dt_nascimento = '1989-12-10';
    	$cliente->genero = 'M';
    	$cliente->email = 'magno@email.com';
    	$cliente->telefone = '11111111';
    	$cliente->cep = '71.122-111';
    	$cliente->endereco = 'Rua tal';
    	$cliente->complemento = 'www';

    	$cliente->save();*/

    	#$arrClientes = ['Magno', 'Joao', 'Maria'];

        $Listacliente = Cliente::get();


    	return view('cliente.index', ['clientes' => $Listacliente]);
    }

    public function novo(){
        return view ('cliente.novoCliente');
    }

    public function salvar(Request $request){
        $data = $request->all();
        #dd($data);
       
        $validator = Validator::make($data, [
            'nome' => 'required|max:255',
            'cpf' => 'required|max:14',
            'genero' => 'required',
            'dt_nascimento' =>'date',
            'email' => 'email|max:100',
            'telefone' =>'required',
            'CEP' =>'required|max:10'
        ]);

        if ($validator->fails()) {
            return redirect('cliente/novo')
                        ->withErrors($validator)
                        ->withInput();
        }


        $cliente = Cliente::create($data);

         return redirect('clientes');

    }

    public function pesquisar(){
        return view ('cliente.pesquisarCliente');
    }

    public function alterar($id){
        $cliente = Cliente::find($id);
        return view ('cliente.alterarCliente', ['cliente' => $cliente]);

    }

    public function update(Request $request){
         $data = $request->all();
         $cod_cliente = $data['cod_cliente'];
         unset($data['_token']);
         unset($data['cod_cliente']);
       
        $validator = Validator::make($data, [
            'nome' => 'required|max:255',
            'cpf' => 'required|max:14',
            'genero' => 'required',
            'dt_nascimento' =>'date',
            'email' => 'email|max:100',
            'telefone' =>'required',
            'CEP' =>'required|max:10'
        ]);

        if ($validator->fails()) {
            return redirect('cliente/alterar/'.$cod_cliente)
                        ->withErrors($validator)
                        ->withInput();
        }

        Cliente::where('cod_cliente', $cod_cliente)->update($data);

          return redirect('clientes');

    }   

    public function delete($id){
        Cliente::destroy($id);
        return redirect('clientes');
    }
}
