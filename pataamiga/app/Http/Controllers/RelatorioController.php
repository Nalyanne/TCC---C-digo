<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Relatorio;
use Khill\Lavacharts\Lavacharts;
use App\Models\Atendimento;
use App\Models\Servico;


class RelatorioController extends Controller
{
     public function index(){
   
#___________________________________________________Configuração do chart de atendimentos.

        $atendimentos = Atendimento::all();
        $datas = $atendimentos->pluck('data_servico');
     
     	$lava = new Lavacharts;
     	$GraficoMeses = $lava->DataTable();
     	$GraficoMeses->addStringColumn('Meses')->addNumberColumn('Atendimentos');
        $GraficoMeses->addRow(['Atendimentos',3]);
       
        $lava->PieChart('Meses',$GraficoMeses);
     	
  #_________________________________________________ Configuração do chart de serviços       
         $servicos = Servico::all();
         $tipo = $servicos->pluck('servico');
         $quantos = $servicos->count();

        #dd($quantos);
         $lava2 = new Lavacharts;
         $graficoServico = $lava2->DataTable();
         $graficoServico->addStringColumn('Servico')->addNumberColumn('Serviços');


             for($i=1; $i<=count($servicos); $i++ ){

                $graficoServico->addRow([$tipo[3] ,$quantos]);
       
             }

         $lava2->BarChart('Servicos',$graficoServico);

    	return view('relatorio.index', ['lava' =>$lava, 'lava2' =>$lava2]);
    }
}
