<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;
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

	public function atendimentos() {

		return $this->hasMany(Atendimento::class, 'cod_atendimento'); 
	}

	public function getValidadeBrAttribute(){
        $date = new \DateTime($this->attributes['validade']);
        return $date->format('d/m/Y');
    }

}
