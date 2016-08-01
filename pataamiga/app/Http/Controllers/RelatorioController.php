<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Relatorio;
use Khill\Lavacharts\Lavacharts;
use App\Models\Atendimento;
use App\Models\Servico;
use Carbon\Carbon;
use DB;

class RelatorioController extends Controller
{
     public function index(Request $request){
         $data = $request->all();
         switch ((isset($data['t'])) ? $data['t'] : 0){
             case 1:
                 return $this->servicos($request);
             break;
             case 2:
                 return $this->atendimentosByMes($request);
             break;
             case 3:
                 return $this->atendimentosByDia($request);
             break;

         }
    	return view('relatorio.index');
    }

    public function servicos(Request $request){
        $data = $request->all();
        #_________________________________________________ Configuração do chart de serviços
        $servicos = Servico::all();
        foreach ($servicos as &$servico){
            $atendimentosServico = Atendimento::where('cod_servico', $servico->cod_servico)->where('cod_status_atend', 4)
                    ->whereBetween('data_servico', [$data['data_inicio'], $data['data_fim']])->count();
            $servico->qtdAtendimentos = $atendimentosServico;
        }

        $lava2 = new Lavacharts;
        $graficoServico = $lava2->DataTable();
        $graficoServico->addStringColumn('Servico')->addNumberColumn('Serviços');


        foreach ($servicos as &$servico){
            $graficoServico->addRow([$servico->servico ,$servico->qtdAtendimentos]);
        }


        $lava2->PieChart('Servicos',$graficoServico);

        return view('relatorio.servicos', ['lava2' =>$lava2, 'form' => $data]);
    }

    public function atendimentosByMes(Request $request){
        $data = $request->all();

        $lava = new Lavacharts;
        $GraficoMeses = $lava->DataTable();
        $GraficoMeses->addStringColumn('Meses')->addNumberColumn('Atendimentos');
       
        $meses = [];

        $inicio = Carbon::parse($data['data_inicio']);
        $inicio->day = 1;
        $fim = Carbon::parse($data['data_fim']);
        $fim->day = 1;

        for($inicio;  $inicio<= $fim; $inicio->addMonth() ){
            $mes = new \stdClass();
            $mes->inteiro = $inicio->month;
            $mes->nome = $this->getNomeMes($inicio->month) . ' '. $inicio->year;
            $meses[] = $mes;
        }
        foreach ($meses as $mes){
            $mesPesquisa =  (strlen($mes->inteiro) < 2) ? '0'.$mes->inteiro : $mes->inteiro;
            $atendimentosMes = Atendimento::where(DB::raw('DATE_FORMAT(data_servico, "%m")') , $mesPesquisa)->where('cod_status_atend', 4)
                ->whereBetween('data_servico', [$data['data_inicio'], $data['data_fim']])->count();


            $GraficoMeses->addRow([$mes->nome ,$atendimentosMes]);

        }
        $lava->BarChart('Atendimentos',$GraficoMeses);



        return view('relatorio.atendimentos-mes', ['lava' =>$lava, 'form' =>$data]);
    }

    public function atendimentosByDia(Request $request){
        $data = $request->all();

        $lava = new Lavacharts;
        $GraficoMeses = $lava->DataTable();
        $GraficoMeses->addStringColumn('Dias')->addNumberColumn('Atendimentos');

        $inicio = Carbon::parse($data['data_inicio']);
        $fim = Carbon::parse($data['data_fim']);

        for($inicio;  $inicio<= $fim; $inicio->addDay() ){
            $atendimentosDia = Atendimento::where('data_servico', $inicio->toDateString())->where('cod_status_atend', 4)->count();
            $GraficoMeses->addRow([$inicio->format('d/m/Y') ,$atendimentosDia]);
        }

        $lava->BarChart('Atendimentos',$GraficoMeses);

        return view('relatorio.atendimentos-dia', ['lava' =>$lava, 'form' =>$data]);
    }

    private function getNomeMes($intMes){
        switch ($intMes){
            case 1:
                return 'Janeiro';
            case 2:
                return 'Fevereiro';
            case 3:
                return 'Março';
            case 4:
                return 'Abril';
            case 5:
                return 'Maio';
            case 6:
                return 'Junho';
            case 7:
                return 'Julho';
            case 8:
                return 'Agosto';
            case 9:
                return 'Setembro';
            case 10:
                return 'Outubro';
            case 11:
                return 'Novembro';
            case 12:
                return 'Dezembro';
            default:
                return 'Undefined';
        }
    }
}
