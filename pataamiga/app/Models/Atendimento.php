<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
		'atualizacao',
		
	];

public function servico() {

    		return $this->hasMany('App\Models\Status_Atendimento');
    }



public function animais() {

    		return $this->hasMany('App\Models\Animal');
    }


public function cliente() {

    		return $this->hasMany('App\Models\Cliente');
    }


public function funcionario() {

    		return $this->hasMany('App\Models\Funcionario');
    }
}
