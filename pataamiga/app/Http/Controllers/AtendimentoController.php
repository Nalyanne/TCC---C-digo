<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Atendimento;
use App\Models\Status_Atendimento;
use App\Models\Cliente;
use App\Models\Animal;
use App\Models\Servico;
use App\Models\Atualizacao;
use App\Models\Funcionario;
use Carbon\Carbon;

class AtendimentoController extends Controller
{
     public function index(){
        $ListarTodos = Atendimento::where('cod_status_atend', '!=', 4)->where('cod_status_atend', '!=', 6)->get();
        $finalizados = Atendimento::where('cod_status_atend', 4)->where('cod_status_atend', '!=', 6)->get();
        

    	return view('atendimento.index',['atendimentos'=> $ListarTodos, 'atendimentosFinalizados' => $finalizados]);
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

        if(isset($dados['ajax']) && $dados['ajax'] == 1){
                return 1;
        }else{
            return redirect ('atendimentos');
        }
        

    }

     public function atualizar($id){

            $atendimento =Atendimento::with(['cliente', 'animal', 'servico', 'atualizacoes'])->find($id);
           
         	return view ('atendimento.atualizarAtendimento',['att' =>$atendimento]);
     }

     public function adicionar(Request $request){   //esse metodo serve para salvar as alterações feitas em "atualizar"
             $adicionar = $request->all();
             unset($adicionar['_token']);
             $adicionar['cod_usuario'] = 10;
             $adicionar['data_hora'] = date("Y-m-d H:i:s");
             
             $data['cod_status_atend'] = 2;
             Atendimento::where('cod_atendimento',$adicionar['cod_atendimento'])->update($data);

             Atualizacao::create($adicionar);
             return redirect('/atendimentos');
    }

     public function alterar ($id){
            $alterar=Atendimento::with(['cliente', 'animal', 'servico'])->find($id);
            $servico=Servico::all();
            $Funcionario = Funcionario::all();


         	return view ('atendimento.alterarAtendimento',['alterar' =>$alterar, 'servico'=>$servico, 'funcionario' => $Funcionario]);
     }

    public function update(Request $request){

            $Upar=$request->all();
            $cod_atendimento = $request['cod_atendimento'];
            unset($Upar['_token']);
            unset($Upar['cod_atendimento']);
            $Upar['cod_status_atend'] = 2;
          
            Atendimento::where('cod_atendimento',$cod_atendimento)->update($Upar);
            return redirect('/atendimentos');
    }

    public function cancelar ($id){

            $data['cod_status_atend'] = 6;
            Atendimento::where('cod_atendimento',$id)->update($data);
    	    return redirect('/atendimentos');
    }

    public function finalizar($id){

            $data['cod_status_atend'] = 4;
            Atendimento::where('cod_atendimento',$id)->update($data);
            return redirect('/atendimentos');
    }
}
