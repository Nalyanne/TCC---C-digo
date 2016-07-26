<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    //Dizendo ao laravel o nome correto da tabela no banco de dados
    protected $table = 'tb_funcionario';

    //Dizendo ao laravel o nome correto do id (identificador) da tabela.

	protected $primaryKey='cod_funcionario';

	public $timestamps=false;

	protected $fillable =[
		'nome',
		'dt_nascimento',
		'genero',
		'cpf',
		'telefone',
		'email',
		'CEP',
		'endereco',
		'complemento',
		'cod_cargo'
	];

	public function usuario(){
		return $this->belongsTo('Usuario');
	}
}
