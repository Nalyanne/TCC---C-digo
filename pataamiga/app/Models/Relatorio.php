<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;
use Animal\Models\Servico;

class Relatorio extends Model
{

	protected $table='tb_atendimento';
	protected $primaryKey="cd_atendimento";
	public $timestamps=false;

	protected $fillable=['cod_servico','cod_funcionario','cod_animal','cod_cliente','data_servico','hora_servico','observacao','atualizacao' ];
}

