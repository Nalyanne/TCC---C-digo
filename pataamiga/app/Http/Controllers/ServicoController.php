<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Servico;

class ServicoController extends Controller
{
     public function index(){
        $ListarServico = Servico::get();

    	return view('servico.index' ,['servicos'=>$ListarServico]);
    }

    public function novo (){
    	return view ('servico.novoServico');
    }

    public function salvar(Request $request){
        $Dados = $request->all();

        //depois inserir a validação
        
        $servico = Servico::create($Dados);
        return redirect('servicos');
    }
    public function pesquisar() {
    	return view ('servico.pesquisarServico');
    }

    public function alterar($id){
        $servico = Servico::find($id);
      #  dd($servico);
    	return view ('servico.alterarServico',['servico'=>$servico]);
    }

    public function update(Request $request){
        $DadosUpload= $request->all();
        $cod_servico=$DadosUpload['cod_servico'];
        
        //depois adicionar validador
        unset($DadosUpload['_token']);
        unset($DadosUpload['cod_servico']);

        Servico::where('cod_servico',$cod_servico)->update($DadosUpload);
        return redirect('servicos');

    }

    public function deletar($id){
        Servico::destroy($id);
    	return redirect ('servicos');
    }

    public function detalhesServico($idServico){
        $servico = Servico::find($idServico);

        return $servico;
    }
}
