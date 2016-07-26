<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Atendimento;

class Servico extends Model
{
   //Dizendo ao laravel o nome correto da tabela no banco de dados
	protected $table = 'tb_servicos';

	//Dizendo ao laravel o nome correto do id (identificador) da tabela.

	protected $primaryKey='cod_servico';
	public $timestamps=false;

	protected $fillable=[

		'servico',
		'descricao',
		'preco',
		'duracao',
		'validade'	
	];

	public function atendimento() {

		return $this->BelongsTo(Atendimento::class, 'cod_atendimento'); 
	}

}
