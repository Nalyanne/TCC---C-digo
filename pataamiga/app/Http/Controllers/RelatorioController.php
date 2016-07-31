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
     	$atendimentos = Atendimento::all()->toArray();
     	$datas = $atendimentos['data_hora' => $date];
		
     	dd($datas);
     	$lava = new Lavacharts;
     	$GraficoMeses = $lava->DataTable();
     	$GraficoMeses->addStringColumn('')->addNumberColumn('');
     	 
    	return view('relatorio.index');
    }
}
