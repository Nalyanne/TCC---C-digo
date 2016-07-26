<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Atendimento;
use App\Models\Status_Atendimento;
use App\Models\Cliente;
use App\Models\Animal;
use App\Models\Servico;

class AtendimentoController extends Controller
{
     public function index(){
        $ListarTodos = Atendimento::get();
        

    	return view('atendimento.index',['atendimentos'=> $ListarTodos]);
    }


    public function novo () {

        $cliente=Cliente::all();
        $animal=Animal::all();
        $servico=Servico::all();
        $status=Status_Atendimento::all();
        $a = Atendimento::orderBy('cod_atendimento', 'desc')->get();
        $novoCod = $a[0]->cod_atendimento;
        $novoCod++;

    	return view ('atendimento.novoAtendimento',['cliente'=>$cliente, 'animal'=>$animal, 'servico'=>$servico,'status'=>$status, 'atend'=>$novoCod]);

    }

    public function salvar(Request $request){

        $dados=$request->all();
        $dados['cod_status_atend'] = 0000000001;

        $atendimento=Atendimento::create($dados);
        return redirect ('atendimentos');

    }

     public function atualizar ($id){
        $Comentario=Atendimento::find($id);
        $servico=Servico::all();

     	return view ('atendimento.atualizarAtendimento',['att' =>$Comentario, 'servicos'=>$servico]);
     }

     public function adicionar(Request $request){   //esse metodo serve para salvar as alterações feitas em "atualizar"
         $adicionar = $request->all();
         $cod_atendimento=$request['cod_atendimento'];
         unset($adicionar['_token']);
         unset($adicionar['cod_atendimento']);

        Atendimento::where('cod_atendimento', $cod_atendimento)->update($adicionar);
         return redirect('/atendimentos');
          }

     public function alterar ($id){
        $alterar=Atendimento::find($id);
        $servico=Servico::all();

     	return view ('atendimento.alterarAtendimento',['alterar' =>$alterar, 'servico'=>$servico]);
     }

public function update(Request $request){

        $Upar=$request->all();
        $cod_atendimento = $request['cod_atendimento'];
        unset($Upar['_token']);
        unset($Upar['cod_atendimento']);

        Atendimento::where('cod_atendimento',$cod_atendimento)->update($Upar);
        return redirect('/atendimentos');
}

     public function cancelar ($id){

        Atendimento::destroy($id);
     	return redirect('/atendimentos');
     }
}
