<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

use App\Models\Cliente;
use App\Models\Raca;


class Animal extends Model
{
   //Dizendo ao laravel o nome correto da tabela no banco de dados
	protected $table = 'tb_animal';

	//Dizendo ao laravel o nome correto do id (identificador) da tabela.

	protected $primaryKey= 'cod_animal';
	
	public $timestamps = false;

	
	protected $fillable = ['nome','cod_especie','cod_raca','pedigree','cod_cor','cod_porte','dt_nascimento','historico','situacao','sexo','status','cod_cliente'];

	public function cliente() {

		return $this->BelongsTo(Cliente::class, 'cod_cliente'); 
	}

	public function raca() {

		return $this->BelongsTo(Raca::class, 'cod_raca'); 
	}

	public function especie(){
		return $this->BelongsTo(Especie::class,'cod_especie');
	}

	public function porte (){
		return $this->BelongsTo(Porte::class,'cod_porte');
	}

	public function cor() {

		return $this->BelongsTo(Cor::class, 'cod_cor'); 
	}

}

