<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Agenda;
use App\Models\Cliente;
use App\Models\Servico;
use App\Models\Atendimento;
use Carbon\Carbon;

class AgendaController extends Controller
{
     public function index(){

     	$cliente=Cliente::all();
        $servico=Servico::all();
        $a = Atendimento::orderBy('cod_atendimento', 'desc')->get();
        $novoCod = $a[0]->cod_atendimento;
        $novoCod++;
    	return view('agenda.index', ['clientes'=>$cliente, 'servico'=>$servico, 'atend'=>$novoCod]);
    }

    public function agendamentos(){
    	$agendamentos = Atendimento::with('cliente', 'servico', 'animal')->whereIn('cod_status_atend', [1, 5])->get();
    	$agendas = [];
    	foreach ($agendamentos as $agendamento) {
    		#dd($agendamento);
    		$agenda['title'] = $agendamento->cliente->nome .' - '.$agendamento->servico->servico;
    		$agenda['start'] = $agendamento->data_servico.'T'.$agendamento->hora_servico;
    		$inicio = Carbon::parse($agenda['start']);
    		$duracao = explode(':', $agendamento->servico->duracao);
    		$inicio->addHours($duracao[0]);
    		$inicio->addMinutes($duracao[1]);
    		$agenda['end'] = $inicio->toDateTimeString();

    		$agendas[] = $agenda;
    	}

    	return $agendas;
    }


    
}

