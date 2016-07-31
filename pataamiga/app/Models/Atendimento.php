<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;

use Illuminate\Database\Eloquent\Model;

use App\Models\Status_Atendimento;
use App\Models\Cliente;
use App\Models\Animal;
use App\Models\Servico;

class Atendimento extends Model
{
    //Dizendo ao laravel o nome correto da tabela no banco de dados
    protected $table = 'tb_atendimento';

    //Dizendo ao laravel o nome correto do id (identificador) da tabela.

	protected $primaryKey='cod_atendimento';
	public $timestamps=false;

	protected $fillable=[
		'cod_animal',
		'cod_cliente',
		'cod_funcionario',
		'cod_servico',
		'cod_status_atend',
		'hora_servico',
		'data_servico',
		'observacao',
		'cod_atualizacao',
		'valor',
		'tb_atendimento_ibfk_7'
		
	];

	public function status() {

    		return $this->BelongsTo('App\Models\Status_Atendimento', 'cod_status_atend');
    }



	public function animal() {

    		return $this->BelongsTo('App\Models\Animal', 'cod_animal');
    }


	public function cliente() {

    		return $this->BelongsTo('App\Models\Cliente', 'cod_cliente');
    }


	public function funcionario() {

    		return $this->BelongsTo('App\Models\Funcionario', 'cod_funcionario');
    }

	public function servico(){
			return $this->BelongsTo('App\Models\Servico', 'cod_servico');
	}

	public function atualizacoes(){
		return $this->hasMany('App\Models\Atualizacao','cod_atendimento');
	}

	public function getDataServicoBrAttribute(){
        $date = new \DateTime($this->attributes['data_servico']);
        return $date->format('d/m/Y');
    }
}
