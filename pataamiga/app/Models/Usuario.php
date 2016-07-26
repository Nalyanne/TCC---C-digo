<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //Dizendo ao laravel o nome correto da tabela no banco de dados
    protected $table = 'tb_usuario';

    //Dizendo ao laravel o nome correto do id (identificador) da tabela.

	protected $primaryKey='cod_usuario';

 	public $timestamps = false;
	protected $fillable=[
		'login','senha','cod_funcionario','cod_tipo_usuario'
	];


	public function funcionario(){

		return $this->hasOne('Funcionario');
	}
}