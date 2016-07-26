<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Usuario;

class UsuarioController extends Controller
{
     public function index(){

        $ListarUsuarios=Usuario::get();

        #dd($ListarUsuarios);
    	return view('usuario.index',['usuarios' =>$ListarUsuarios]);
    }

    public function novo(){
    	return view('usuario.novoUsuario');
    } 

    public function salvar(Request $request){
        $DadosUsuario=$request->all();

        #dd($DadosUsuario);
        $Usuario = Usuario::create($DadosUsuario);
        return redirect('usuarios');
    }

    public function pesquisar(){
    	return view('usuario.pesquisarUsuario');

    }

    public function alterar($id){
        $usuario = Usuario::find($id);
        #$dd($usuario);
    	return view('usuario.alterarUsuario',['usuario'=>$usuario]);

    }

    public function update (Request $request){
        $DadosUpdate = $request->all();
        $cod_usuario = $DadosUpdate['cod_usuario'];
        unset($DadosUpdate['_token']);
        unset($DadosUpdate['cod_usuario']);

        Usuario::where('cod_usuario',$cod_usuario)->update($DadosUpdate);
        return redirect('usuarios');

    }

    public function deletar($id){
        Usuario::destroy($id);

    	return redirect('usuarios');
    }
}
